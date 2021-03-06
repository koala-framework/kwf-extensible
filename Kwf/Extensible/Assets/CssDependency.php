<?php
class Kwf_Extensible_Assets_CssDependency extends Kwf_Assets_Dependency_File_Css
{
    public function getContents($language)
    {
        $ret = parent::getContents($language);
        $ret = str_replace('.x-', '.x4-', $ret);
        $ret = str_replace('url(../images/', 'url(/assets/extensible/resources/images/', $ret);
        return $ret;
    }
}
