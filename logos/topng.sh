#!/bin/bash

inkscape -e $1.png --export-background-opacity=0 -w $2 -h $2 $1.svg
