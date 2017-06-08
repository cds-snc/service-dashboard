<template>
    <div id="departments-completion"></div>
</template>

<script>
    import * as d3 from "d3";

    export default {
        data() {
            return {
                csv: null
            }
        },
        mounted() {
            var app = this;

            d3.csv('/api/charts/departments/completion', function(error, data) {
                app.render(data, '#departments-completion');
            });
        },
        methods: {
            render(dataSet, containerSelector) {
                // Set if  multi-circle
                var multiCircle = dataSet.length > 1 ? true : false;

                // Define svg size
                if(multiCircle) var width = 900, height = 900;
                else            var width = 325, height = 325;



                // Init Graphed Arc
                var arc = d3.arc();

                // Init completed Arc
                var completedArc = d3.arc();

                // Settings
                var PI       = Math.PI,
                        arcMin   = 125,
                        arcWidth = 25,
                        arcPad   = 2,

                        colors = d3.schemeCategory20
                        ;

                // Define and Setup SVG the canvas
                var svg = d3.select(containerSelector)
                                .append("svg")
                                .attr("width", width)
                                .attr("height", height)
                                .attr("class", "circleGraph")
                                .append("g")
                                .attr("transform", "translate(" + width/2 + "," + height/2 + ")")
                        ;

                // Setup arc
                arc
                        .innerRadius( function(d,i) { return arcMin + ( i * ( arcWidth ) ) + arcPad; } )
                        .outerRadius( function(d,i) { return arcMin + ( i + 1 ) * ( arcWidth ); } )
                        .startAngle( 0 * (PI/180) )
                        .endAngle( function(d, i) { return (d.completion/100) * 2 * Math.PI; } )
                ;

                // If not multiCircle, draw completed arc
                if(!multiCircle) {

                    // Setup competed Arc
                    completedArc
                            .innerRadius( function() { return arcMin + ( 0 * ( arcWidth ) ) + arcPad; } )
                            .outerRadius( function() { return arcMin + ( 0 + 1 ) * ( arcWidth ); } )
                            .startAngle( 0 * (PI/180) )
                            .endAngle( function() { return 2 * Math.PI; } )
                    ;

                    // Draw Complete Arc
                    svg
                            .append("path")
                            .attr("fill", "#CCC")
                            .attr("d", completedArc)
                    ;
                }

                // Bind Data to arc
                var arcs = svg.selectAll(".arcVis").data(dataSet);

                arcs
                        .enter()
                        .append("svg:g:path")
                        .attr("class", "arcVis")
                        .attr("fill", function(d,i) { return colors[i]; })
                        .attr("d", arc)
                        .attr("style", "transition: 0.5s all ease")
                        .attr("data-name", function(d) { return d.name; })
                        .attr("data-val", function(d) { return d.completion + "%"; })
                ;

                if(multiCircle) {
                    svg
                            .append("g")
                            .attr("transform", "translate(0, 0)")
                            .append("foreignObject")
                            .attr("class", "circlePercent")
                            .attr("x", -82)
                            .attr("y", -55)
                            .attr("width", 170)
                            .attr("height", 110)
                    ;

                }

                else {
                    svg
                            .append("g")
                            .attr("transform", "translate(0, 0)")
                            .append("foreignObject")
                            .attr("class", "circlePercent")
                            .attr("x", -82)
                            .attr("y", -55)
                            .attr("width", 170)
                            .attr("height", 110)
                            .html("<div class=\"percentText\">" + dataSet[0].completion + "%</div><div class=\"percentLable\">Completion Rate</div>")
                    ;

                }

                if(multiCircle) {
                    d3.selectAll(".arcVis").on("mouseover", function() {

                        var target = d3.select(this);

                        target.attr("opacity", "0.65");

                        var deptName  = target.attr("data-name");
                        var deptVal   = target.attr("data-val");
                        var container = containerSelector + " .circlePercent";

                        d3.selectAll(containerSelector)
                                .select(".circlePercent")
                                .html("<div class=\"percentText\">" + deptVal + "</div>" + "<div class=\"percentLable small\">" + deptName + "</div>")
                        ;
                    })

                    d3.selectAll(".arcVis").on("mouseout", function(){
                        d3.select(this).attr("opacity", "1");
                        d3.select(".circlePercent").html('');
                    });
                }
            }
        }
    }
</script>