#!/bin/bash

name=$1
width=$2
height=${3-$2}

inkscape -e $name.png --export-background-opacity=0 -w $width -h $height $name.svg
