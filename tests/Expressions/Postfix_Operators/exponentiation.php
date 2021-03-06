<?hh // strict

namespace NS_exponentiation;

class C {
  public float $prop = 12.0;
}

function f(): int { return 3; }

function main(): void {
  echo "=========== some basic tests ===========\n";

/*
  var_dump(2**3);
  var_dump(2**3.0);
  var_dump(2.0**3.0);
  var_dump(2.111**3.111);
  var_dump(2**"3");
  var_dump("2"**3.0);
  var_dump("2.0"**"3.0");
  var_dump("2.111"**"3.111");

  echo "=========== compound-assignment version ===========\n";

  $v = 5;
  $v **= 3;
  var_dump($v);

  $v = 5;
  $v **= 3.0;
  var_dump($v);

  echo "=========== checking precedence against * and / ===========\n";

  $r = 4 / 2 * 3 ** 2; // ** has higher precedence than * and /
  var_dump($r);
  $r = 4 / 2 * (3 ** 2);
  var_dump($r);
  $r = (4 / 2) * 3 ** 2;
  var_dump($r);
  $r = (4 / 2) * (3 ** 2);
  var_dump($r);
  $r = (((4 / 2) * 3) ** 2);
  var_dump($r);

  echo "=========== checking precedence against unary - ===========\n";

  var_dump(-3 ** 2);
  var_dump((-3) ** 2);
  var_dump(-(3 ** 2)); // ** has higher precedence than unary -

  echo "=========== checking precedence against [], (), and -> ===========\n";

  $a = array(10, 20);
  var_dump($a[0] ** 2);
  var_dump(f() ** 2);
  $c = new C;
  var_dump($c->prop ** 2);
*/
}

/* HH_FIXME[1002] call to main in strict*/
main();
