#!/bin/bash

input="$1"
output="$2"

while read -r line
do
    s1="echo '"
    s2="';"
    newline="$s1$line$s2"
    echo "$newline" >> $output
done < "$input"

