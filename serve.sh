#!/bin/bash
FILES=/home/ubuntu/workspace/sass/*
for f in $FILES
do
    filename=$(basename "$f")
    extension="${filename##*.}"
    filename="${filename%.*}"
    
    sass $f /home/ubuntu/workspace/css/$filename.css
done