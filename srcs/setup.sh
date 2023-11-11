#!/bin/bash

# Specify the directories you want to create
directories=(
  "/home/yjarhbou/data/wp"
  "/home/yjarhbou/data/db"
)

# Loop through the directories array
for dir in "${directories[@]}"; do
  # Check if the directory exists
  if [ ! -d "$dir" ]; then
    # Create the directory if it doesn't exist
    mkdir -p "$dir"
  fi
done


