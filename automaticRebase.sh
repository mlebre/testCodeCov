#bin/bash

ARGS=("$@")

# Set space as the delimiter
IFS=' '
shopt -s lastpipe

for value in "${ARGS[@]}"
do
  git add $value
done
# Commit changes
git commit -m 'Automatic commit'

git log -n 3 | grep ^commit | tail -n 1 | read sha
echo $sha | cut -c 7- | read sha
echo $sha

# Squash last into the previous
git rebase -i $sha




