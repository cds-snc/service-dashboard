<template>
    <div id="e-services-chart"></div>
</template>

<script>
    import * as d3 from "d3";

    export default {
        props: ['services'],
        mounted() {
            this.render(this.services, '#e-services-chart');
        },
        methods: {
            render(dataSet, containerSelector) {
                // Canvas size (SVG size)
                var canvasWidth     = 850,
                        canvasHeight    = 225,

                        // Margins
                        margin = {
                            top:    55,
                            right:  50,
                            bottom: 20,
                            left:   50
                        };

                // Node display settings
                var nodeSpacing     = 80;
                var nodeY           = 30;
                var nodeRadius      = 25;

                // Colors
                var nodeColor       = "#1f77b4";
                var nodeColor__NA   = "#CCCCCC";

                // Initialize svg
                var svg = d3.select(containerSelector)
                                .append("svg")
                                .attr("width", canvasWidth)
                                .attr("height", canvasHeight)
                                .attr("class", "eServices")
                        ;

                // Append group that incorperates the margins
                var g = svg.append("g")
                                .attr("transform", "translate(" + margin.left + ","+ margin.top +")")
                        ;

                // Deterimin the node fill (if any)
                var determineNodeFill = function(d) {
                    switch(d) {
                        case 1 : return nodeColor;    break;
                        case 0 : return "none";       break;
                        default: return "none";       break;
                    }
                }

                // Determine the node outline color
                var determineNodeOutline = function(d) {

                    switch(d) {
                        case 1 : return nodeColor;        break;
                        case 0 : return nodeColor;        break;
                        default: return nodeColor__NA;    break;
                    }
                }

                // Draw link (line) function
                var drawLink = function(idx) {

                    // If the current node is the last node or if it is "not applicable", don't draw a link (draw link of length 0)
                    if(idx == (dataSet.length - 1) || dataSet[idx].enabled === null) { return "M 0 0 L 0 0"; }

                    // Else, draw link
                    else {

                        // Find next applicable node
                        var nextApplicableIdx = findNextApplicableNode(idx);

                        // If there is a next applicable node...
                        if(nextApplicableIdx != -1) {

                            // Init return string
                            var returnString = "M " + (nodeRadius) + " 0 ";

                            // Determine the x-coord of the next node relative to the current group's position
                            var nextNodeXVal = ((nextApplicableIdx - idx) * (nodeSpacing + (2 * nodeRadius) )) - nodeRadius;

                            // If next next node in chain is "not applicable", draw around the node
                            if(dataSet[idx + 1].enabled === null) {

                                // Set control points at ~1/3, ~2/3 and draws Bezier Curve to next node

                                // Control point at ~1/3
                                returnString += "C " + ((nextNodeXVal * 0.5) - (nextNodeXVal * 0.1)) + " " + (nodeRadius + 45) * -1 + " ";

                                // Control point at ~2/3
                                returnString += ((nextNodeXVal * 0.5) + (nextNodeXVal * 0.17)) + " " + (nodeRadius + 45) * -1 + " ";

                                // Final destination of curve at next node
                                returnString += nextNodeXVal + " 0"
                            }

                            // If the next node is "applicable", just draw link to next node.
                            else { returnString += "L " + nextNodeXVal + " 0" ; }

                            // Return the "d" value
                            return  returnString;
                        }

                        // Else (the node is not applicable or at end of chain), draw link of length 0
                        else { return "M 0 0 L 0 0"; }
                    }
                }

                // Finds the next node that is "applicable" and returns its index.
                var findNextApplicableNode = function(idx) {

                    // Default, return -1. No next applicable found.
                    var nextApplicable = -1;

                    // Init iterator value
                    var it = idx;

                    // Get current node
                    var current = dataSet[it];

                    // While iterator is within bounds of data set
                    while(it < (dataSet.length - 1)) {

                        // get next node in chain
                        var nextNode = dataSet[++it];

                        // Check to see if it is applicable, if it is, break loop
                        if(nextNode.enabled != null) {

                            // Set next applicable to current value of iterator
                            nextApplicable = it;

                            // Break loop
                            break;
                        }

                        // Else, continue
                        else { continue; }
                    }

                    // Return idx of next applicable node
                    return nextApplicable;
                }

                // Determine link style
                var drawLinkStyle = function(idx) {

                    // Init return String
                    var returnString = "";

                    // Finds next applicable node
                    var nextApplicableIdx = findNextApplicableNode(idx)

                    // Current node
                    var currentNode = dataSet[idx];

                    // If there exist next applicable node and this node is applicable
                    if(+currentNode.enabled != -1 && nextApplicable != -1) {

                        // get next applicable node
                        var nextApplicable = dataSet[nextApplicableIdx];

                        // Append dash array attribute to return string
                        returnString += "stroke-dasharray: ";

                        // Set dash array attribute
                        if(+currentNode.enabled == 1 && +nextApplicable.enabled == 1) {

                            // Line style is solid
                            returnString += " 0,0";
                        }
                        else {

                            // Line style is dashed
                            returnString += " 2,3";
                        }
                    }

                    // Return returnString
                    return returnString;
                }

                // Iterate through data set and draw graph
                dataSet.forEach(function(d, i) {

                    // Get eEnabled value
                    var type = d.enabled;

                    // Draw node-link group
                    var nodes = g.append("g");

                    // Draw node circle
                    nodes
                            .attr("transform", "translate(" + (i * (nodeSpacing + (2 * nodeRadius) )) + "," + nodeY + ")")
                            .attr("class", "node")
                            .append("circle")
                            .attr("r", nodeRadius)
                            .attr("cx", 0)
                            .attr("cy", 0)
                            .attr("fill", determineNodeFill(type))
                            .attr("stroke", determineNodeOutline(type))
                            .attr("stroke-width", 2)
                    ;

                    // Draw label
                    nodes
                            .append("foreignObject")
                            .attr("class","nodeText")
                            .attr("x", -50)
                            .attr("y", nodeRadius)
                            .attr("width", 100)
                            .attr("height", 110)
                            .html("<div>" + d.name + "</div>")
                    ;

                    // Draw link (line)
                    nodes
                            .append("g")
                            .attr("class", "link")
                            .append("path")
                            .attr("d", drawLink(i))
                            .attr("stroke", nodeColor)
                            .attr("style", drawLinkStyle(i))
                            .attr("stroke-width", 2)
                            .attr("fill", "none")
                });
            }
        }
    }
</script>