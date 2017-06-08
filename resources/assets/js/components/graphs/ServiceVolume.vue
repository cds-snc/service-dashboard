<template>
    <div id="service-volume-chart"></div>
</template>

<script>
    import * as d3 from "d3";

    export default {
        props: ['csv'],
        mounted() {
            var app = this;

            d3.csv(this.csv, function(error, data) {
                app.render(data, '#service-volume-chart');
            });
        },
        methods: {
            render(dataSet, containerSelector) {

                // Canvas size (SVG size)
                var canvasWidth     = 850,
                        canvasHeight    = 550,

                        // Margins
                        margin = {
                            top:    20,
                            right:  20,
                            bottom: 20,
                            left:   300
                        },

                        // Init graph canvas
                        svg              = d3.select(containerSelector).append("svg").attr("width", canvasWidth).attr("height", canvasHeight),
                        width            = +svg.attr("width") - margin.left - margin.right,
                        height           = +svg.attr("height") - margin.top - margin.bottom,
                        g                = svg.append("g").attr("transform", "translate(" + margin.left + ","+ margin.top +")"),

                        // Init Scale
                        xScale           = d3.scaleLinear(),
                        yScale           = d3.scaleBand(),
                        channelScale     = d3.scaleOrdinal(),

                        // Init stack layout
                        stacked          = d3.stack().keys( dataSet.columns.slice(1) )
                        ;

                // Setup Scale
                xScale
                        .range( [0, width] )
                        .domain([0, d3.max(dataSet, function(d){
                            d.online    = +d.online;
                            d.telephone = +d.telephone;
                            d.in_person  = +d.in_person;
                            d.mail      = +d.mail;

                            return d.online + d.telephone + d.in_person + d.mail;

                        })]).nice()
                ;

                // Generate y-scale
                yScale
                        .rangeRound( [0,height] )
                        .domain( dataSet.map( function(d){ return d.name; } ) )
                        .padding( 0.2 )
                ;

                // Colors
                channelScale
                        .range( d3.schemeCategory10 )
                        .domain( dataSet.columns.slice(1) )
                ;

                // Draw bars
                g
                        .selectAll(".serie")
                        .data(stacked.keys(dataSet.columns.slice(1))(dataSet)) // Databinding
                        .enter()
                        .append("g")
                        .attr("class", "serie")
                        .attr("fill", function(d){ return channelScale(d.key); } )
                        .selectAll("rect")
                        .data(function(d) { return d; } )
                        .enter()
                        .append("rect")
                        .attr("y",      function(d) { return yScale(d.data.name) } )
                        .attr("height", yScale.bandwidth())
                        .attr("x",      function(d) {return xScale(d[0]); })
                        .attr("width",  function(d){ return xScale(d[1])-xScale(d[0]); } )
                ;

                g   // Draw vertical axis
                        .append("g")
                        .attr("class", "axis axis--y")
                        .call(d3.axisLeft(yScale))
                ;

                g   // Draw horrizontal axis
                        .append("g")
                        .attr("class", "axis axis--x")
                        .attr("transform", "translate(0,"+ height +")")
                        .call(d3.axisBottom(xScale).ticks(10, "s"))
                ;
            }
        }
    }
</script>