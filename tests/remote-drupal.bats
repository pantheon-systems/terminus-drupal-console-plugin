#!/usr/bin/env bats

#
# remote-drupal.bats
#
# Run remote drupal console commands
#

@test "get a list of available themes" {
  run terminus drupal $TERMINUS_SITE.dev theme:debug
  [ "$status" -eq 0 ]
  [[ "$output" == *"stark"* ]]
  [[ "$output" == *"bartik"* ]]
  [[ "$output" == *"seven"* ]]
  [[ "$output" == *"stable"* ]]
  [[ "$output" == *"classy"* ]]
}
