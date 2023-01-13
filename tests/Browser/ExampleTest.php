<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function ($first, $second, $third) {
            $first->visit('/')
            ->assertSee("Travel With Us Now")
            ->clickLink('Wisata')
            ->assertPathIs('/wisatawisata')
            ->click('@wisata-card')
            ->assertPathIs('/wisatadetail/1')
            ->click('@pesan1')
            ->assertPathIs('/pesan/1')
            ->assertSee('Nama Pemesan')
            ->type('namaPemesan','Karisma')
            ->type('noTelepon','081252787166')
            ->type('emailPemesan','kharismanabil@gmail.com')
            ->select('travel_agent_id')
            ->type('tanggal','20122020')
            ->press('Lanjutkan Pemesanan')
            ->assertPathIs('/riwayatpesanan')
            ->click('@bayar1')
            ->attach('buktiTf', __DIR__.'\Components\buktiBni.jpg')
            ->press('Kirim Bukti Transfer')
            ->assertPathIs('/riwayatpesanan')
            ->click('@lihatpesanan1')
            ->screenshot('lokasiUser')
            ;

            $second->visit('/')
            ->assertSee("Travel With Us Now")
            ->click('@login')
            ->assertPathIs('/login')
            ->assertSee("Login")
            ->type('username','karismaa')
            ->type('password','123')
            ->press('Login')
            ->assertPathIs('/dashboard')
            ->assertSee('Bukti Terkirim - Menunggu Verifikasi')
            ->press('Verifikasi')
            ->assertSee('Telah Diverifikasi')
            ->screenshot('lokasiAdmin')
            ;

            $third->visit('/riwayatpesanan')
            ->assertSee('Telah Diverifikasi')
            ->screenshot('lokasiUser2')
            ;

        });
    }
}
