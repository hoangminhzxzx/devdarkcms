<?php

use DevDarkCms\CMS;
use PHPUnit\Framework\TestCase;

class CMSTest extends TestCase
{
    public function testFetchDataAndSave()
    {
        $cms = new CMS();
        $cms->fetchDataAndSave();

        // Add assertions to verify data was saved correctly
        $this->assertTrue(true); // Placeholder assertion
    }
}