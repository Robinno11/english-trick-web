<?php

namespace Tests\Feature;

use App\Models\Program;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_can_be_rendered_with_english_trick_branding_and_slogan(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('ENGLISH TRICK', false);
        $response->assertSee('NO TRICK, NO SPEAK', false);
        $response->assertSee('Damarsi', false);
        $response->assertSee('Sidoarjo', false);
        $response->assertSee('English for Kids', false);
        $response->assertSee('GSE & CEFR', false);
        $response->assertSee('1,500+');
        $response->assertSee('98%');
        $response->assertSee('Siswa per Kelas', false);
        $response->assertSee('6285385120633', false);
        $response->assertSee('+62 853-8512-0633', false);
    }

    public function test_home_page_displays_company_profile_and_philosophy_methods(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Company Profile');
        $response->assertSee('Visi');
        $response->assertSee('Misi');
        $response->assertSee('Filosofi Belajar');
        $response->assertSee('Metode Lama');
        $response->assertSee('Metode "No Trick, No Speak"', false);
    }

    public function test_home_page_displays_all_six_programs_and_pricing(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('English for Kids');
        $response->assertSee('English for Teens');
        $response->assertSee('Speaking Booster &amp; General English', false);
        $response->assertSee('TOEFL &amp; IELTS Fast-Track Trick', false);
        $response->assertSee('VIP Private Class 1-on-1', false);
        $response->assertSee('English Trick Intensive Camp');
        $response->assertSee('Rp 250.000');
        $response->assertSee('Rp 350.000');
        $response->assertSee('Rp 500.000');
        $response->assertSee('Rp 800.000');
        $response->assertSee('On Going');
    }

    public function test_home_page_displays_six_key_advantages_and_three_branches(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        // Keunggulan
        $response->assertSee('Kurikulum Internasional Pearson');
        $response->assertSee('Tes Kenaikan Level CEFR');
        $response->assertSee('Achievement Certificate');
        $response->assertSee('Pendampingan Olimpiade/Lomba', false);
        // Lokasi
        $response->assertSee('Karangbong');
        $response->assertSee('Damarsi');
        $response->assertSee('Taman Pondok Jati');
        $response->assertSee('0853-8512-0633');
        $response->assertSee('0813-2647-0060');
        $response->assertSee('0878-6717-0098');
    }

    public function test_home_page_displays_tutor_team_with_custom_photos_and_names(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Tutor Prestatif, Ramah & Komunikatif', false);
        $response->assertSee('Mr. Eksan');
        $response->assertSee('Ms. Zoey');
        $response->assertSee('Ms. Tiara');
        $response->assertSee('Ms. Ni&#039;ma', false);
        $response->assertSee('Ms. Arin');
        $response->assertSee('images/tutors/mr-eksan.jpeg');
        $response->assertSee('images/tutors/ms-zoey.jpeg');
        $response->assertSee('images/tutors/ms-tiara.jpeg');
        $response->assertSee('images/tutors/ms-nima.jpeg');
        $response->assertSee('images/tutors/ms-arin.jpeg');
    }

    public function test_home_page_displays_student_testimonials_matching_flyer_design(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Apa Kata Mereka Tentang English Trick?');
        $response->assertSee('Calvin Khalief Hadi Sapoetra');
        $response->assertSee('Mama Afiza, Marda dan Adara');
        $response->assertSee('Adzkia Vianna K');
        $response->assertSee('Rafael Putra');
        $response->assertSee('Nayla Putri');
        $response->assertSee('Daffa Almer');
        $response->assertSee('Salsabila Hani');
        $response->assertSee('Kevin Wijaya');
        $response->assertSee('Mama Akhdan');
        $response->assertSee('Mama Nahla');
        $response->assertSee('Mama Kelvin');
        $response->assertSee('Mama Alzia');
        $response->assertSee('images/testimonials/calvin.jpg');
        $response->assertSee('Ace the Test, Elevate Your English with Smart Tricks!', false);
    }

    public function test_program_detail_page_can_be_rendered(): void
    {
        $this->seed();

        $program = Program::first();

        $response = $this->get('/program/'.$program->slug);

        $response->assertStatus(200);
        $response->assertSee($program->name);
        $response->assertSee('No Trick, No Speak', false);
        $response->assertSee('6285385120633', false);
    }

    public function test_home_page_displays_career_center_and_nav_indicator(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Career Center');
        $response->assertSee('career-center');
        $response->assertSee('nav-indicator-line');
    }
}
