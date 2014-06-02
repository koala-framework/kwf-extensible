<?php
class Kwf_Extensible_Assets_ProviderTest extends Kwf_Test_TestCase
{
    public function testObservable()
    {
        $l = new Kwf_Extensible_Assets_TestProviderList();
        $d = $l->findDependency('Extensible.calendar.menu.Event');
        $array = $d->getRecursiveFiles();
        $this->assertEquals(202, count($array));
    }
}
