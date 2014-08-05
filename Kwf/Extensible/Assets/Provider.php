<?php
class Kwf_Extensible_Assets_Provider extends Kwf_Assets_Provider_Abstract
{
    public function getDependency($dependencyName)
    {
        if (substr($dependencyName, 0, 11) == 'Extensible.' || $dependencyName == 'Extensible') {
            $class = $dependencyName;
            if ($class != 'Extensible') {
                $class = substr($class, 11);
            }
            $file = 'extensible/src/'.str_replace('.', '/', $class).'.js';
            return new Kwf_Extensible_Assets_JsDependency($file);
        }
        return null;
    }

    public function getDependenciesForDependency(Kwf_Assets_Dependency_Abstract $dependency)
    {
        if ($dependency instanceof Kwf_Extensible_Assets_JsDependency && $dependency->getFileNameWithType() == 'extensible/src/data/Model.js') {
            //automatically load core dependencies
            return array(
                Kwf_Assets_Dependency_Abstract::DEPENDENCY_TYPE_REQUIRES => array(
                    $this->_providerList->findDependency('Extensible'),
                    new Kwf_Extensible_Assets_CssDependency('extensible/resources/css/calendar.css'),
                    new Kwf_Extensible_Assets_CssDependency('extensible/resources/css/calendar-colors.css'),
                ),
            );
        }
        return array();
    }
}
