<?php
class Kwf_Extensible_Assets_TestProviderList extends Kwf_Assets_ProviderList_Abstract
{
    public function __construct()
    {
        parent::__construct(array(
            new Kwf_Ext_Assets_Provider(),
            new Kwf_Extensible_Assets_Provider(),
            new Kwf_Assets_Provider_JsClassKwf(),
            new Kwf_Assets_Provider_JsClass(KWF_PATH.'/tests', 'kwf/tests'),
        ));
    }
}
