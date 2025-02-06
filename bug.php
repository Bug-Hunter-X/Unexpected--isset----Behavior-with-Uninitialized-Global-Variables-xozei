function myFunc() {
  if (isset($GLOBALS['someVar'])) {
    echo "Variable exists";
  } else {
    echo "Variable does not exist";
  }
}

myFunc();