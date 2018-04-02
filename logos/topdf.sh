#!/bin/bash

name=$1
width=$2
height=${3-$2}

inkscape --export-pdf=$name.pdf -w $width -h $height $name.svg
