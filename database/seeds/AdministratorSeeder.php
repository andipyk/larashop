<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User; 
        $administrator->username = "administrator";
        $administrator->name     = "Site Administrator";
        $administrator->email    = "admin@andipyk.com";
        $administrator->roles    = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("andiokey");
        $administrator->avatar   = "belum-ada-file.png";
        $administrator->address  = "Cempaka no 12 Payolansek";

        $administrator->save();

        $this->command->info("User Admin Berhasil Diinput");
    }
}
