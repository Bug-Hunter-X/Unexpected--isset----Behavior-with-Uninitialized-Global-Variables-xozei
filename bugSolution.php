function myFunc() {
  if (array_key_exists('someVar', $GLOBALS)) {
    echo "Variable exists";
  } else {
    echo "Variable does not exist";
  }
}

myFunc();