<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="11">';
echo '<h2>Chapter 11 - paragraph Designing Codes</h2>';
echo '<h3>Listing 11.1: Defining a trait</h3>';
showcode(<<<'CODE'
namespace Ds\Util;
trait SecureDebugInfo
{
    public function __debugInfo() {
        $info = (array) $this;
        foreach ($info as $key => $value) {
            // Hide elements starting with '_'
            if ($key[0] == '_') {
                unset($info[$key]);
            }
        }
    }
}
namespace Ds;
class MyClass
{
    use Util\SecureDebugInfo;
}
CODE
);

echo '<h3>Listing 11.2: Using a trait in another trait & Listing 11.3: Trait inheritance & class_uses()</h3>';
showcode(<<<'CODE'
trait One
{
    public function one() { }
}
trait Two
{
    public function two() { }
}
trait Three
{
    use One, Two; //Trait three now comprises of all three traits
    public function Three() { }
}
class Numbers
{
    use One; // Adds One->one()
    public function two() { }
    public function three() { }
}
class MoreNumbers extends Numbers
{
    use Two; // Two->two() overrides Numbers->two()
    public function one() { } // Overrides Numbers->one()
// (Trait One->one)
}
class EvenMoreNumbers extends MoreNumbers {
    use Three; // Three->one() overrides MoreNumbers->one()
// Three->two() overrides MoreNumbers->two()
// (Trait Two->two)
// Three->three() overrides inherited
// Numbers->three()
    public function three() { } // Overrides Three->three()
}
print_r(class_uses('MoreNumbers'));
CODE
);

echo '<h3>Listing 11.4: Abstract trait methods & Listing 11.5: Using insteadof & 11.6 Aliasing a trait & 11.7 Aliasing a trait to change visibility</h3>';
showcode(<<<'CODE'
namespace Ds\Util;
trait SecureDebugInfo2
{
    public function __debugInfo() {
        return $this->getData();
    }
    abstract public function getData();
}
trait DebugHelper
{
    public function  __debugInfo(){
        return 'anything';
    }
}
class MyClass2
{
    use SecureDebugInfo2, DebugHelper {
        SecureDebugInfo2::__debugInfo insteadof DebugHelper;
//DebugHelper::__debugInfo as debugHelperInfo; //for 11.6
//SecureDebugInfo2::__debugInfo as protected; //for 11.7
//DebugHelper::__debugInfo as private debugHelperInfo; //for 11.7
    }
    public function getData(){
    }
}
CODE
);

echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);

