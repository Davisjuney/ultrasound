<?php declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Patient;

class UltrasoundTest extends TestCase
{
    /**
     * Test index().
     *
     * @return boolean
     */
    public function test_patients()
    {
        $this->withoutExceptionHandling()->get(route('api-patients'))
            ->assertStatus(200);
    }
    public function test_scan_report()
    {
        $this->withoutExceptionHandling()->get(route('api-scan-reports'))
            ->assertStatus(200);
    }
    public function test_api_sonographer_inputs()
    {
        $this->withoutExceptionHandling()->get(route('api-sonographer-inputs'))
            ->assertStatus(200);
    }
    
}
