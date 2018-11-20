<?php
namespace App\tests\Entity;

use App\Entity\Erem;
use PHPUnit\Framework\TestCase;

class EremTest extends TestCase
{

        public function testSetFirstName_validValue_successful()
        {
                $user = new Erem;
                $value = 'Erem';
                $user->setFirstName($value);
                $this->assertEquals($value, $user->getFirstName());
        }
}
?>
