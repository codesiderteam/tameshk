<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                "state_id"=> "1",
                "name"=> "آذرشهر"
            ],
            [
                "state_id"=> "1",
                "name"=> "تیمورلو"
            ],
            [
                "state_id"=> "1",
                "name"=> "گوگان"
            ],
            [
                "state_id"=> "1",
                "name"=> "ممقان"
            ],
            [
                "state_id"=> "1",
                "name"=> "اسکو"
            ],
            [
                "state_id"=> "1",
                "name"=> "ایلخچی"
            ],
            [
                "state_id"=> "1",
                "name"=> "سهند"
            ],
            [
                "state_id"=> "1",
                "name"=> "اهر"
            ],
            [
                "state_id"=> "1",
                "name"=> "هوراند"
            ],
            [
                "state_id"=> "1",
                "name"=> "بستان آباد"
            ],
            [
                "state_id"=> "1",
                "name"=> "تیکمه داش"
            ],
            [
                "state_id"=> "1",
                "name"=> "بناب"
            ],
            [
                "state_id"=> "1",
                "name"=> "باسمنج"
            ],
            [
                "state_id"=> "1",
                "name"=> "تبریز"
            ],
            [
                "state_id"=> "1",
                "name"=> "خسروشاه"
            ],
            [
                "state_id"=> "1",
                "name"=> "سردرود"
            ],
            [
                "state_id"=> "1",
                "name"=> "جلفا"
            ],
            [
                "state_id"=> "1",
                "name"=> "سیه رود"
            ],
            [
                "state_id"=> "1",
                "name"=> "هادیشهر"
            ],
            [
                "state_id"=> "1",
                "name"=> "قره آغاج"
            ],
            [
                "state_id"=> "1",
                "name"=> "خمارلو"
            ],
            [
                "state_id"=> "1",
                "name"=> "دوزدوزان"
            ],
            [
                "state_id"=> "1",
                "name"=> "سراب"
            ],
            [
                "state_id"=> "1",
                "name"=> "شربیان"
            ],
            [
                "state_id"=> "1",
                "name"=> "مهربان"
            ],
            [
                "state_id"=> "1",
                "name"=> "تسوج"
            ],
            [
                "state_id"=> "1",
                "name"=> "خامنه"
            ],
            [
                "state_id"=> "1",
                "name"=> "سیس"
            ],
            [
                "state_id"=> "1",
                "name"=> "شبستر"
            ],
            [
                "state_id"=> "1",
                "name"=> "شرفخانه"
            ],
            [
                "state_id"=> "1",
                "name"=> "شندآباد"
            ],
            [
                "state_id"=> "1",
                "name"=> "صوفیان"
            ],
            [
                "state_id"=> "1",
                "name"=> "کوزه کنان"
            ],
            [
                "state_id"=> "1",
                "name"=> "وایقان"
            ],
            [
                "state_id"=> "1",
                "name"=> "جوان قلعه"
            ],
            [
                "state_id"=> "1",
                "name"=> "عجب شیر"
            ],
            [
                "state_id"=> "1",
                "name"=> "آبش احمد"
            ],
            [
                "state_id"=> "1",
                "name"=> "کلیبر"
            ],
            [
                "state_id"=> "1",
                "name"=> "خداجو(خراجو)"
            ],
            [
                "state_id"=> "1",
                "name"=> "مراغه"
            ],
            [
                "state_id"=> "1",
                "name"=> "بناب مرند"
            ],
            [
                "state_id"=> "1",
                "name"=> "زنوز"
            ],
            [
                "state_id"=> "1",
                "name"=> "کشکسرای"
            ],
            [
                "state_id"=> "1",
                "name"=> "مرند"
            ],
            [
                "state_id"=> "1",
                "name"=> "یامچی"
            ],
            [
                "state_id"=> "1",
                "name"=> "لیلان"
            ],
            [
                "state_id"=> "1",
                "name"=> "مبارک شهر"
            ],
            [
                "state_id"=> "1",
                "name"=> "ملکان"
            ],
            [
                "state_id"=> "1",
                "name"=> "آقکند"
            ],
            [
                "state_id"=> "1",
                "name"=> "اچاچی"
            ],
            [
                "state_id"=> "1",
                "name"=> "ترک"
            ],
            [
                "state_id"=> "1",
                "name"=> "ترکمانچای"
            ],
            [
                "state_id"=> "1",
                "name"=> "میانه"
            ],
            [
                "state_id"=> "1",
                "name"=> "خاروانا"
            ],
            [
                "state_id"=> "1",
                "name"=> "ورزقان"
            ],
            [
                "state_id"=> "1",
                "name"=> "بخشایش"
            ],
            [
                "state_id"=> "1",
                "name"=> "خواجه"
            ],
            [
                "state_id"=> "1",
                "name"=> "زرنق"
            ],
            [
                "state_id"=> "1",
                "name"=> "کلوانق"
            ],
            [
                "state_id"=> "1",
                "name"=> "هریس"
            ],
            [
                "state_id"=> "1",
                "name"=> "نظرکهریزی"
            ],
            [
                "state_id"=> "1",
                "name"=> "هشترود"
            ],
            [
                "state_id"=> "2",
                "name"=> "ارومیه"
            ],
            [
                "state_id"=> "2",
                "name"=> "سرو"
            ],
            [
                "state_id"=> "2",
                "name"=> "سیلوانه"
            ],
            [
                "state_id"=> "2",
                "name"=> "قوشچی"
            ],
            [
                "state_id"=> "2",
                "name"=> "نوشین"
            ],
            [
                "state_id"=> "2",
                "name"=> "اشنویه"
            ],
            [
                "state_id"=> "2",
                "name"=> "نالوس"
            ],
            [
                "state_id"=> "2",
                "name"=> "بوکان"
            ],
            [
                "state_id"=> "2",
                "name"=> "سیمینه"
            ],
            [
                "state_id"=> "2",
                "name"=> "پلدشت"
            ],
            [
                "state_id"=> "2",
                "name"=> "نازک علیا"
            ],
            [
                "state_id"=> "2",
                "name"=> "پیرانشهر"
            ],
            [
                "state_id"=> "2",
                "name"=> "گردکشانه"
            ],
            [
                "state_id"=> "2",
                "name"=> "تکاب"
            ],
            [
                "state_id"=> "2",
                "name"=> "آواجیق"
            ],
            [
                "state_id"=> "2",
                "name"=> "سیه چشمه"
            ],
            [
                "state_id"=> "2",
                "name"=> "قره ضیاءالدین"
            ],
            [
                "state_id"=> "2",
                "name"=> "ایواوغلی"
            ],
            [
                "state_id"=> "2",
                "name"=> "خوی"
            ],
            [
                "state_id"=> "2",
                "name"=> "دیزج دیز"
            ],
            [
                "state_id"=> "2",
                "name"=> "زرآباد"
            ],
            [
                "state_id"=> "2",
                "name"=> "فیرورق"
            ],
            [
                "state_id"=> "2",
                "name"=> "قطور"
            ],
            [
                "state_id"=> "2",
                "name"=> "ربط"
            ],
            [
                "state_id"=> "2",
                "name"=> "سردشت"
            ],
            [
                "state_id"=> "2",
                "name"=> "میرآباد"
            ],
            [
                "state_id"=> "2",
                "name"=> "تازه شهر"
            ],
            [
                "state_id"=> "2",
                "name"=> "سلماس"
            ],
            [
                "state_id"=> "2",
                "name"=> "شاهین دژ"
            ],
            [
                "state_id"=> "2",
                "name"=> "کشاورز"
            ],
            [
                "state_id"=> "2",
                "name"=> "محمودآباد"
            ],
            [
                "state_id"=> "2",
                "name"=> "شوط"
            ],
            [
                "state_id"=> "2",
                "name"=> "مرگنلر"
            ],
            [
                "state_id"=> "2",
                "name"=> "بازرگان"
            ],
            [
                "state_id"=> "2",
                "name"=> "ماکو"
            ],
            [
                "state_id"=> "2",
                "name"=> "خلیفان"
            ],
            [
                "state_id"=> "2",
                "name"=> "مهاباد"
            ],
            [
                "state_id"=> "2",
                "name"=> "باروق"
            ],
            [
                "state_id"=> "2",
                "name"=> "چهاربرج"
            ],
            [
                "state_id"=> "2",
                "name"=> "میاندوآب"
            ],
            [
                "state_id"=> "2",
                "name"=> "محمدیار"
            ],
            [
                "state_id"=> "2",
                "name"=> "نقده"
            ],
            [
                "state_id"=> "3",
                "name"=> "اردبیل"
            ],
            [
                "state_id"=> "3",
                "name"=> "هیر"
            ],
            [
                "state_id"=> "3",
                "name"=> "بیله سوار"
            ],
            [
                "state_id"=> "3",
                "name"=> "جعفرآباد"
            ],
            [
                "state_id"=> "3",
                "name"=> "اسلام اباد"
            ],
            [
                "state_id"=> "3",
                "name"=> "اصلاندوز"
            ],
            [
                "state_id"=> "3",
                "name"=> "پارس آباد"
            ],
            [
                "state_id"=> "3",
                "name"=> "تازه کند"
            ],
            [
                "state_id"=> "3",
                "name"=> "خلخال"
            ],
            [
                "state_id"=> "3",
                "name"=> "کلور"
            ],
            [
                "state_id"=> "3",
                "name"=> "هشتجین"
            ],
            [
                "state_id"=> "3",
                "name"=> "سرعین"
            ],
            [
                "state_id"=> "3",
                "name"=> "گیوی"
            ],
            [
                "state_id"=> "3",
                "name"=> "تازه کندانگوت"
            ],
            [
                "state_id"=> "3",
                "name"=> "گرمی"
            ],
            [
                "state_id"=> "3",
                "name"=> "رضی"
            ],
            [
                "state_id"=> "3",
                "name"=> "فخراباد"
            ],
            [
                "state_id"=> "3",
                "name"=> "قصابه"
            ],
            [
                "state_id"=> "3",
                "name"=> "لاهرود"
            ],
            [
                "state_id"=> "3",
                "name"=> "مرادلو"
            ],
            [
                "state_id"=> "3",
                "name"=> "مشگین شهر"
            ],
            [
                "state_id"=> "3",
                "name"=> "آبی بیگلو"
            ],
            [
                "state_id"=> "3",
                "name"=> "عنبران"
            ],
            [
                "state_id"=> "3",
                "name"=> "نمین"
            ],
            [
                "state_id"=> "3",
                "name"=> "کوراییم"
            ],
            [
                "state_id"=> "3",
                "name"=> "نیر"
            ],
            [
                "state_id"=> "4",
                "name"=> "آران وبیدگل"
            ],
            [
                "state_id"=> "4",
                "name"=> "ابوزیدآباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "سفیدشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "نوش آباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "اردستان"
            ],
            [
                "state_id"=> "4",
                "name"=> "زواره"
            ],
            [
                "state_id"=> "4",
                "name"=> "مهاباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "اژیه"
            ],
            [
                "state_id"=> "4",
                "name"=> "اصفهان"
            ],
            [
                "state_id"=> "4",
                "name"=> "بهارستان"
            ],
            [
                "state_id"=> "4",
                "name"=> "تودشک"
            ],
            [
                "state_id"=> "4",
                "name"=> "حسن اباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "زیار"
            ],
            [
                "state_id"=> "4",
                "name"=> "سجزی"
            ],
            [
                "state_id"=> "4",
                "name"=> "قهجاورستان"
            ],
            [
                "state_id"=> "4",
                "name"=> "کوهپایه"
            ],
            [
                "state_id"=> "4",
                "name"=> "محمدآباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "نصرآباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "نیک آباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "ورزنه"
            ],
            [
                "state_id"=> "4",
                "name"=> "هرند"
            ],
            [
                "state_id"=> "4",
                "name"=> "حبیب آباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "خورزوق"
            ],
            [
                "state_id"=> "4",
                "name"=> "دستگرد"
            ],
            [
                "state_id"=> "4",
                "name"=> "دولت آباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "سین"
            ],
            [
                "state_id"=> "4",
                "name"=> "شاپورآباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "کمشچه"
            ],
            [
                "state_id"=> "4",
                "name"=> "افوس"
            ],
            [
                "state_id"=> "4",
                "name"=> "بویین ومیاندشت"
            ],
            [
                "state_id"=> "4",
                "name"=> "تیران"
            ],
            [
                "state_id"=> "4",
                "name"=> "رضوانشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "عسگران"
            ],
            [
                "state_id"=> "4",
                "name"=> "چادگان"
            ],
            [
                "state_id"=> "4",
                "name"=> "رزوه"
            ],
            [
                "state_id"=> "4",
                "name"=> "اصغرآباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "خمینی شهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "درچه"
            ],
            [
                "state_id"=> "4",
                "name"=> "کوشک"
            ],
            [
                "state_id"=> "4",
                "name"=> "خوانسار"
            ],
            [
                "state_id"=> "4",
                "name"=> "جندق"
            ],
            [
                "state_id"=> "4",
                "name"=> "خور"
            ],
            [
                "state_id"=> "4",
                "name"=> "فرخی"
            ],
            [
                "state_id"=> "4",
                "name"=> "دهاقان"
            ],
            [
                "state_id"=> "4",
                "name"=> "گلشن"
            ],
            [
                "state_id"=> "4",
                "name"=> "حنا"
            ],
            [
                "state_id"=> "4",
                "name"=> "سمیرم"
            ],
            [
                "state_id"=> "4",
                "name"=> "کمه"
            ],
            [
                "state_id"=> "4",
                "name"=> "ونک"
            ],
            [
                "state_id"=> "4",
                "name"=> "شاهین شهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "گرگاب"
            ],
            [
                "state_id"=> "4",
                "name"=> "گزبرخوار"
            ],
            [
                "state_id"=> "4",
                "name"=> "لای بید"
            ],
            [
                "state_id"=> "4",
                "name"=> "میمه"
            ],
            [
                "state_id"=> "4",
                "name"=> "وزوان"
            ],
            [
                "state_id"=> "4",
                "name"=> "شهرضا"
            ],
            [
                "state_id"=> "4",
                "name"=> "منظریه"
            ],
            [
                "state_id"=> "4",
                "name"=> "داران"
            ],
            [
                "state_id"=> "4",
                "name"=> "دامنه"
            ],
            [
                "state_id"=> "4",
                "name"=> "برف انبار"
            ],
            [
                "state_id"=> "4",
                "name"=> "فریدونشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "ابریشم"
            ],
            [
                "state_id"=> "4",
                "name"=> "ایمانشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "بهاران شهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "پیربکران"
            ],
            [
                "state_id"=> "4",
                "name"=> "زازران"
            ],
            [
                "state_id"=> "4",
                "name"=> "فلاورجان"
            ],
            [
                "state_id"=> "4",
                "name"=> "قهدریجان"
            ],
            [
                "state_id"=> "4",
                "name"=> "کلیشادوسودرجان"
            ],
            [
                "state_id"=> "4",
                "name"=> "برزک"
            ],
            [
                "state_id"=> "4",
                "name"=> "جوشقان قالی"
            ],
            [
                "state_id"=> "4",
                "name"=> "قمصر"
            ],
            [
                "state_id"=> "4",
                "name"=> "کاشان"
            ],
            [
                "state_id"=> "4",
                "name"=> "کامو و چوگان"
            ],
            [
                "state_id"=> "4",
                "name"=> "مشکات"
            ],
            [
                "state_id"=> "4",
                "name"=> "نیاسر"
            ],
            [
                "state_id"=> "4",
                "name"=> "گلپایگان"
            ],
            [
                "state_id"=> "4",
                "name"=> "گلشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "گوگد"
            ],
            [
                "state_id"=> "4",
                "name"=> "باغ بهادران"
            ],
            [
                "state_id"=> "4",
                "name"=> "باغشاد"
            ],
            [
                "state_id"=> "4",
                "name"=> "چرمهین"
            ],
            [
                "state_id"=> "4",
                "name"=> "چمگردان"
            ],
            [
                "state_id"=> "4",
                "name"=> "زاینده رود"
            ],
            [
                "state_id"=> "4",
                "name"=> "زرین شهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "سده لنجان"
            ],
            [
                "state_id"=> "4",
                "name"=> "فولادشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "ورنامخواست"
            ],
            [
                "state_id"=> "4",
                "name"=> "دیزیچه"
            ],
            [
                "state_id"=> "4",
                "name"=> "زیباشهر"
            ],
            [
                "state_id"=> "4",
                "name"=> "طالخونچه"
            ],
            [
                "state_id"=> "4",
                "name"=> "کرکوند"
            ],
            [
                "state_id"=> "4",
                "name"=> "مبارکه"
            ],
            [
                "state_id"=> "4",
                "name"=> "مجلسی"
            ],
            [
                "state_id"=> "4",
                "name"=> "انارک"
            ],
            [
                "state_id"=> "4",
                "name"=> "بافران"
            ],
            [
                "state_id"=> "4",
                "name"=> "نایین"
            ],
            [
                "state_id"=> "4",
                "name"=> "جوزدان"
            ],
            [
                "state_id"=> "4",
                "name"=> "دهق"
            ],
            [
                "state_id"=> "4",
                "name"=> "علویجه"
            ],
            [
                "state_id"=> "4",
                "name"=> "کهریزسنگ"
            ],
            [
                "state_id"=> "4",
                "name"=> "گلدشت"
            ],
            [
                "state_id"=> "4",
                "name"=> "نجف آباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "بادرود"
            ],
            [
                "state_id"=> "4",
                "name"=> "خالدآباد"
            ],
            [
                "state_id"=> "4",
                "name"=> "طرق رود"
            ],
            [
                "state_id"=> "4",
                "name"=> "نطنز"
            ],
            [
                "state_id"=> "5",
                "name"=> "اشتهارد"
            ],
            [
                "state_id"=> "5",
                "name"=> "چهارباغ"
            ],
            [
                "state_id"=> "5",
                "name"=> "شهرجدیدهشتگرد"
            ],
            [
                "state_id"=> "5",
                "name"=> "کوهسار"
            ],
            [
                "state_id"=> "5",
                "name"=> "گلسار"
            ],
            [
                "state_id"=> "5",
                "name"=> "هشتگرد"
            ],
            [
                "state_id"=> "5",
                "name"=> "طالقان"
            ],
            [
                "state_id"=> "5",
                "name"=> "فردیس"
            ],
            [
                "state_id"=> "5",
                "name"=> "مشکین دشت"
            ],
            [
                "state_id"=> "5",
                "name"=> "آسارا"
            ],
            [
                "state_id"=> "5",
                "name"=> "کرج"
            ],
            [
                "state_id"=> "5",
                "name"=> "کمال شهر"
            ],
            [
                "state_id"=> "5",
                "name"=> "گرمدره"
            ],
            [
                "state_id"=> "5",
                "name"=> "ماهدشت"
            ],
            [
                "state_id"=> "5",
                "name"=> "محمدشهر"
            ],
            [
                "state_id"=> "5",
                "name"=> "تنکمان"
            ],
            [
                "state_id"=> "5",
                "name"=> "نظرآباد"
            ],
            [
                "state_id"=> "6",
                "name"=> "آبدانان"
            ],
            [
                "state_id"=> "6",
                "name"=> "سراب باغ"
            ],
            [
                "state_id"=> "6",
                "name"=> "مورموری"
            ],
            [
                "state_id"=> "6",
                "name"=> "ایلام"
            ],
            [
                "state_id"=> "6",
                "name"=> "چوار"
            ],
            [
                "state_id"=> "6",
                "name"=> "ایوان"
            ],
            [
                "state_id"=> "6",
                "name"=> "زرنه"
            ],
            [
                "state_id"=> "6",
                "name"=> "بدره"
            ],
            [
                "state_id"=> "6",
                "name"=> "آسمان آباد"
            ],
            [
                "state_id"=> "6",
                "name"=> "بلاوه"
            ],
            [
                "state_id"=> "6",
                "name"=> "توحید"
            ],
            [
                "state_id"=> "6",
                "name"=> "سرابله"
            ],
            [
                "state_id"=> "6",
                "name"=> "شباب"
            ],
            [
                "state_id"=> "6",
                "name"=> "دره شهر"
            ],
            [
                "state_id"=> "6",
                "name"=> "ماژین"
            ],
            [
                "state_id"=> "6",
                "name"=> "پهله"
            ],
            [
                "state_id"=> "6",
                "name"=> "دهلران"
            ],
            [
                "state_id"=> "6",
                "name"=> "موسیان"
            ],
            [
                "state_id"=> "6",
                "name"=> "میمه"
            ],
            [
                "state_id"=> "6",
                "name"=> "لومار"
            ],
            [
                "state_id"=> "6",
                "name"=> "ارکواز"
            ],
            [
                "state_id"=> "6",
                "name"=> "دلگشا"
            ],
            [
                "state_id"=> "6",
                "name"=> "مهر"
            ],
            [
                "state_id"=> "6",
                "name"=> "صالح آباد"
            ],
            [
                "state_id"=> "6",
                "name"=> "مهران"
            ],
            [
                "state_id"=> "7",
                "name"=> "بوشهر"
            ],
            [
                "state_id"=> "7",
                "name"=> "چغادک"
            ],
            [
                "state_id"=> "7",
                "name"=> "خارک"
            ],
            [
                "state_id"=> "7",
                "name"=> "عالی شهر"
            ],
            [
                "state_id"=> "7",
                "name"=> "آباد"
            ],
            [
                "state_id"=> "7",
                "name"=> "اهرم"
            ],
            [
                "state_id"=> "7",
                "name"=> "دلوار"
            ],
            [
                "state_id"=> "7",
                "name"=> "انارستان"
            ],
            [
                "state_id"=> "7",
                "name"=> "جم"
            ],
            [
                "state_id"=> "7",
                "name"=> "ریز"
            ],
            [
                "state_id"=> "7",
                "name"=> "آب پخش"
            ],
            [
                "state_id"=> "7",
                "name"=> "برازجان"
            ],
            [
                "state_id"=> "7",
                "name"=> "بوشکان"
            ],
            [
                "state_id"=> "7",
                "name"=> "تنگ ارم"
            ],
            [
                "state_id"=> "7",
                "name"=> "دالکی"
            ],
            [
                "state_id"=> "7",
                "name"=> "سعد آباد"
            ],
            [
                "state_id"=> "7",
                "name"=> "شبانکاره"
            ],
            [
                "state_id"=> "7",
                "name"=> "کلمه"
            ],
            [
                "state_id"=> "7",
                "name"=> "وحدتیه"
            ],
            [
                "state_id"=> "7",
                "name"=> "بادوله"
            ],
            [
                "state_id"=> "7",
                "name"=> "خورموج"
            ],
            [
                "state_id"=> "7",
                "name"=> "شنبه"
            ],
            [
                "state_id"=> "7",
                "name"=> "کاکی"
            ],
            [
                "state_id"=> "7",
                "name"=> "آبدان"
            ],
            [
                "state_id"=> "7",
                "name"=> "بردخون"
            ],
            [
                "state_id"=> "7",
                "name"=> "بردستان"
            ],
            [
                "state_id"=> "7",
                "name"=> "بندردیر"
            ],
            [
                "state_id"=> "7",
                "name"=> "دوراهک"
            ],
            [
                "state_id"=> "7",
                "name"=> "امام حسن"
            ],
            [
                "state_id"=> "7",
                "name"=> "بندردیلم"
            ],
            [
                "state_id"=> "7",
                "name"=> "عسلویه"
            ],
            [
                "state_id"=> "7",
                "name"=> "نخل تقی"
            ],
            [
                "state_id"=> "7",
                "name"=> "بندرکنگان"
            ],
            [
                "state_id"=> "7",
                "name"=> "بنک"
            ],
            [
                "state_id"=> "7",
                "name"=> "سیراف"
            ],
            [
                "state_id"=> "7",
                "name"=> "بندرریگ"
            ],
            [
                "state_id"=> "7",
                "name"=> "بندرگناوه"
            ],
            [
                "state_id"=> "8",
                "name"=> "احمد آباد مستوفی"
            ],
            [
                "state_id"=> "8",
                "name"=> "اسلامشهر"
            ],
            [
                "state_id"=> "8",
                "name"=> "چهاردانگه"
            ],
            [
                "state_id"=> "8",
                "name"=> "صالحیه"
            ],
            [
                "state_id"=> "8",
                "name"=> "گلستان"
            ],
            [
                "state_id"=> "8",
                "name"=> "نسیم شهر"
            ],
            [
                "state_id"=> "8",
                "name"=> "پاکدشت"
            ],
            [
                "state_id"=> "8",
                "name"=> "شریف آباد"
            ],
            [
                "state_id"=> "8",
                "name"=> "فرون اباد"
            ],
            [
                "state_id"=> "8",
                "name"=> "بومهن"
            ],
            [
                "state_id"=> "8",
                "name"=> "پردیس"
            ],
            [
                "state_id"=> "8",
                "name"=> "پیشوا"
            ],
            [
                "state_id"=> "8",
                "name"=> "تهران"
            ],
            [
                "state_id"=> "8",
                "name"=> "آبسرد"
            ],
            [
                "state_id"=> "8",
                "name"=> "آبعلی"
            ],
            [
                "state_id"=> "8",
                "name"=> "دماوند"
            ],
            [
                "state_id"=> "8",
                "name"=> "رودهن"
            ],
            [
                "state_id"=> "8",
                "name"=> "کیلان"
            ],
            [
                "state_id"=> "8",
                "name"=> "پرند"
            ],
            [
                "state_id"=> "8",
                "name"=> "رباطکریم"
            ],
            [
                "state_id"=> "8",
                "name"=> "نصیرشهر"
            ],
            [
                "state_id"=> "8",
                "name"=> "باقرشهر"
            ],
            [
                "state_id"=> "8",
                "name"=> "حسن آباد"
            ],
            [
                "state_id"=> "8",
                "name"=> "ری"
            ],
            [
                "state_id"=> "8",
                "name"=> "کهریزک"
            ],
            [
                "state_id"=> "8",
                "name"=> "تجریش"
            ],
            [
                "state_id"=> "8",
                "name"=> "شمشک"
            ],
            [
                "state_id"=> "8",
                "name"=> "فشم"
            ],
            [
                "state_id"=> "8",
                "name"=> "لواسان"
            ],
            [
                "state_id"=> "8",
                "name"=> "اندیشه"
            ],
            [
                "state_id"=> "8",
                "name"=> "باغستان"
            ],
            [
                "state_id"=> "8",
                "name"=> "شاهدشهر"
            ],
            [
                "state_id"=> "8",
                "name"=> "شهریار"
            ],
            [
                "state_id"=> "8",
                "name"=> "صباشهر"
            ],
            [
                "state_id"=> "8",
                "name"=> "فردوسیه"
            ],
            [
                "state_id"=> "8",
                "name"=> "وحیدیه"
            ],
            [
                "state_id"=> "8",
                "name"=> "ارجمند"
            ],
            [
                "state_id"=> "8",
                "name"=> "فیروزکوه"
            ],
            [
                "state_id"=> "8",
                "name"=> "قدس"
            ],
            [
                "state_id"=> "8",
                "name"=> "قرچک"
            ],
            [
                "state_id"=> "8",
                "name"=> "صفادشت"
            ],
            [
                "state_id"=> "8",
                "name"=> "ملارد"
            ],
            [
                "state_id"=> "8",
                "name"=> "جوادآباد"
            ],
            [
                "state_id"=> "8",
                "name"=> "ورامین"
            ],
            [
                "state_id"=> "9",
                "name"=> "اردل"
            ],
            [
                "state_id"=> "9",
                "name"=> "دشتک"
            ],
            [
                "state_id"=> "9",
                "name"=> "سرخون"
            ],
            [
                "state_id"=> "9",
                "name"=> "کاج"
            ],
            [
                "state_id"=> "9",
                "name"=> "بروجن"
            ],
            [
                "state_id"=> "9",
                "name"=> "بلداجی"
            ],
            [
                "state_id"=> "9",
                "name"=> "سفیددشت"
            ],
            [
                "state_id"=> "9",
                "name"=> "فرادبنه"
            ],
            [
                "state_id"=> "9",
                "name"=> "گندمان"
            ],
            [
                "state_id"=> "9",
                "name"=> "نقنه"
            ],
            [
                "state_id"=> "9",
                "name"=> "بن"
            ],
            [
                "state_id"=> "9",
                "name"=> "وردنجان"
            ],
            [
                "state_id"=> "9",
                "name"=> "سامان"
            ],
            [
                "state_id"=> "9",
                "name"=> "سودجان"
            ],
            [
                "state_id"=> "9",
                "name"=> "سورشجان"
            ],
            [
                "state_id"=> "9",
                "name"=> "شهرکرد"
            ],
            [
                "state_id"=> "9",
                "name"=> "طاقانک"
            ],
            [
                "state_id"=> "9",
                "name"=> "فرخ شهر"
            ],
            [
                "state_id"=> "9",
                "name"=> "کیان"
            ],
            [
                "state_id"=> "9",
                "name"=> "نافچ"
            ],
            [
                "state_id"=> "9",
                "name"=> "هارونی"
            ],
            [
                "state_id"=> "9",
                "name"=> "هفشجان"
            ],
            [
                "state_id"=> "9",
                "name"=> "باباحیدر"
            ],
            [
                "state_id"=> "9",
                "name"=> "پردنجان"
            ],
            [
                "state_id"=> "9",
                "name"=> "جونقان"
            ],
            [
                "state_id"=> "9",
                "name"=> "چلیچه"
            ],
            [
                "state_id"=> "9",
                "name"=> "فارسان"
            ],
            [
                "state_id"=> "9",
                "name"=> "گوجان"
            ],
            [
                "state_id"=> "9",
                "name"=> "بازفت"
            ],
            [
                "state_id"=> "9",
                "name"=> "چلگرد"
            ],
            [
                "state_id"=> "9",
                "name"=> "صمصامی"
            ],
            [
                "state_id"=> "9",
                "name"=> "دستنا"
            ],
            [
                "state_id"=> "9",
                "name"=> "شلمزار"
            ],
            [
                "state_id"=> "9",
                "name"=> "گهرو"
            ],
            [
                "state_id"=> "9",
                "name"=> "ناغان"
            ],
            [
                "state_id"=> "9",
                "name"=> "آلونی"
            ],
            [
                "state_id"=> "9",
                "name"=> "سردشت"
            ],
            [
                "state_id"=> "9",
                "name"=> "لردگان"
            ],
            [
                "state_id"=> "9",
                "name"=> "مال خلیفه"
            ],
            [
                "state_id"=> "9",
                "name"=> "منج"
            ],
            [
                "state_id"=> "10",
                "name"=> "ارسک"
            ],
            [
                "state_id"=> "10",
                "name"=> "بشرویه"
            ],
            [
                "state_id"=> "10",
                "name"=> "بیرجند"
            ],
            [
                "state_id"=> "10",
                "name"=> "خوسف"
            ],
            [
                "state_id"=> "10",
                "name"=> "محمدشهر"
            ],
            [
                "state_id"=> "10",
                "name"=> "اسدیه"
            ],
            [
                "state_id"=> "10",
                "name"=> "طبس مسینا"
            ],
            [
                "state_id"=> "10",
                "name"=> "قهستان"
            ],
            [
                "state_id"=> "10",
                "name"=> "گزیک"
            ],
            [
                "state_id"=> "10",
                "name"=> "حاجی آباد"
            ],
            [
                "state_id"=> "10",
                "name"=> "زهان"
            ],
            [
                "state_id"=> "10",
                "name"=> "آیسک"
            ],
            [
                "state_id"=> "10",
                "name"=> "سرایان"
            ],
            [
                "state_id"=> "10",
                "name"=> "سه قلعه"
            ],
            [
                "state_id"=> "10",
                "name"=> "سربیشه"
            ],
            [
                "state_id"=> "10",
                "name"=> "مود"
            ],
            [
                "state_id"=> "10",
                "name"=> "دیهوک"
            ],
            [
                "state_id"=> "10",
                "name"=> "طبس"
            ],
            [
                "state_id"=> "10",
                "name"=> "عشق آباد"
            ],
            [
                "state_id"=> "10",
                "name"=> "اسلامیه"
            ],
            [
                "state_id"=> "10",
                "name"=> "فردوس"
            ],
            [
                "state_id"=> "10",
                "name"=> "آرین شهر"
            ],
            [
                "state_id"=> "10",
                "name"=> "اسفدن"
            ],
            [
                "state_id"=> "10",
                "name"=> "خضری دشت بیاض"
            ],
            [
                "state_id"=> "10",
                "name"=> "قاین"
            ],
            [
                "state_id"=> "10",
                "name"=> "نیمبلوک"
            ],
            [
                "state_id"=> "10",
                "name"=> "شوسف"
            ],
            [
                "state_id"=> "10",
                "name"=> "نهبندان"
            ],
            [
                "state_id"=> "11",
                "name"=> "باخرز"
            ],
            [
                "state_id"=> "11",
                "name"=> "بجستان"
            ],
            [
                "state_id"=> "11",
                "name"=> "یونسی"
            ],
            [
                "state_id"=> "11",
                "name"=> "انابد"
            ],
            [
                "state_id"=> "11",
                "name"=> "بردسکن"
            ],
            [
                "state_id"=> "11",
                "name"=> "شهراباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "شاندیز"
            ],
            [
                "state_id"=> "11",
                "name"=> "طرقبه"
            ],
            [
                "state_id"=> "11",
                "name"=> "تایباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "کاریز"
            ],
            [
                "state_id"=> "11",
                "name"=> "مشهدریزه"
            ],
            [
                "state_id"=> "11",
                "name"=> "احمدابادصولت"
            ],
            [
                "state_id"=> "11",
                "name"=> "تربت جام"
            ],
            [
                "state_id"=> "11",
                "name"=> "صالح آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "نصرآباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "نیل شهر"
            ],
            [
                "state_id"=> "11",
                "name"=> "بایک"
            ],
            [
                "state_id"=> "11",
                "name"=> "تربت حیدریه"
            ],
            [
                "state_id"=> "11",
                "name"=> "رباط سنگ"
            ],
            [
                "state_id"=> "11",
                "name"=> "کدکن"
            ],
            [
                "state_id"=> "11",
                "name"=> "جغتای"
            ],
            [
                "state_id"=> "11",
                "name"=> "نقاب"
            ],
            [
                "state_id"=> "11",
                "name"=> "چناران"
            ],
            [
                "state_id"=> "11",
                "name"=> "گلبهار"
            ],
            [
                "state_id"=> "11",
                "name"=> "گلمکان"
            ],
            [
                "state_id"=> "11",
                "name"=> "خلیل آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "کندر"
            ],
            [
                "state_id"=> "11",
                "name"=> "خواف"
            ],
            [
                "state_id"=> "11",
                "name"=> "سلامی"
            ],
            [
                "state_id"=> "11",
                "name"=> "سنگان"
            ],
            [
                "state_id"=> "11",
                "name"=> "قاسم آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "نشتیفان"
            ],
            [
                "state_id"=> "11",
                "name"=> "سلطان آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "داورزن"
            ],
            [
                "state_id"=> "11",
                "name"=> "چاپشلو"
            ],
            [
                "state_id"=> "11",
                "name"=> "درگز"
            ],
            [
                "state_id"=> "11",
                "name"=> "لطف آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "نوخندان"
            ],
            [
                "state_id"=> "11",
                "name"=> "جنگل"
            ],
            [
                "state_id"=> "11",
                "name"=> "رشتخوار"
            ],
            [
                "state_id"=> "11",
                "name"=> "دولت آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "روداب"
            ],
            [
                "state_id"=> "11",
                "name"=> "سبزوار"
            ],
            [
                "state_id"=> "11",
                "name"=> "ششتمد"
            ],
            [
                "state_id"=> "11",
                "name"=> "سرخس"
            ],
            [
                "state_id"=> "11",
                "name"=> "مزدآوند"
            ],
            [
                "state_id"=> "11",
                "name"=> "سفیدسنگ"
            ],
            [
                "state_id"=> "11",
                "name"=> "فرهادگرد"
            ],
            [
                "state_id"=> "11",
                "name"=> "فریمان"
            ],
            [
                "state_id"=> "11",
                "name"=> "قلندرآباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "فیروزه"
            ],
            [
                "state_id"=> "11",
                "name"=> "همت آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "باجگیران"
            ],
            [
                "state_id"=> "11",
                "name"=> "قوچان"
            ],
            [
                "state_id"=> "11",
                "name"=> "ریوش"
            ],
            [
                "state_id"=> "11",
                "name"=> "کاشمر"
            ],
            [
                "state_id"=> "11",
                "name"=> "شهرزو"
            ],
            [
                "state_id"=> "11",
                "name"=> "کلات"
            ],
            [
                "state_id"=> "11",
                "name"=> "بیدخت"
            ],
            [
                "state_id"=> "11",
                "name"=> "کاخک"
            ],
            [
                "state_id"=> "11",
                "name"=> "گناباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "رضویه"
            ],
            [
                "state_id"=> "11",
                "name"=> "مشهد"
            ],
            [
                "state_id"=> "11",
                "name"=> "مشهد ثامن"
            ],
            [
                "state_id"=> "11",
                "name"=> "ملک آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "شادمهر"
            ],
            [
                "state_id"=> "11",
                "name"=> "فیض آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "بار"
            ],
            [
                "state_id"=> "11",
                "name"=> "چکنه"
            ],
            [
                "state_id"=> "11",
                "name"=> "خرو"
            ],
            [
                "state_id"=> "11",
                "name"=> "درود"
            ],
            [
                "state_id"=> "11",
                "name"=> "عشق آباد"
            ],
            [
                "state_id"=> "11",
                "name"=> "قدمگاه"
            ],
            [
                "state_id"=> "11",
                "name"=> "نیشابور"
            ],
            [
                "state_id"=> "12",
                "name"=> "اسفراین"
            ],
            [
                "state_id"=> "12",
                "name"=> "صفی آباد"
            ],
            [
                "state_id"=> "12",
                "name"=> "بجنورد"
            ],
            [
                "state_id"=> "12",
                "name"=> "چناران شهر"
            ],
            [
                "state_id"=> "12",
                "name"=> "حصارگرمخان"
            ],
            [
                "state_id"=> "12",
                "name"=> "جاجرم"
            ],
            [
                "state_id"=> "12",
                "name"=> "سنخواست"
            ],
            [
                "state_id"=> "12",
                "name"=> "شوقان"
            ],
            [
                "state_id"=> "12",
                "name"=> "راز"
            ],
            [
                "state_id"=> "12",
                "name"=> "زیارت"
            ],
            [
                "state_id"=> "12",
                "name"=> "شیروان"
            ],
            [
                "state_id"=> "12",
                "name"=> "قوشخانه"
            ],
            [
                "state_id"=> "12",
                "name"=> "لوجلی"
            ],
            [
                "state_id"=> "12",
                "name"=> "تیتکانلو"
            ],
            [
                "state_id"=> "12",
                "name"=> "فاروج"
            ],
            [
                "state_id"=> "12",
                "name"=> "ایور"
            ],
            [
                "state_id"=> "12",
                "name"=> "درق"
            ],
            [
                "state_id"=> "12",
                "name"=> "گرمه"
            ],
            [
                "state_id"=> "12",
                "name"=> "آشخانه"
            ],
            [
                "state_id"=> "12",
                "name"=> "آوا"
            ],
            [
                "state_id"=> "12",
                "name"=> "پیش قلعه"
            ],
            [
                "state_id"=> "12",
                "name"=> "قاضی"
            ],
            [
                "state_id"=> "13",
                "name"=> "آبادان"
            ],
            [
                "state_id"=> "13",
                "name"=> "اروندکنار"
            ],
            [
                "state_id"=> "13",
                "name"=> "چویبده"
            ],
            [
                "state_id"=> "13",
                "name"=> "آغاجاری"
            ],
            [
                "state_id"=> "13",
                "name"=> "امیدیه"
            ],
            [
                "state_id"=> "13",
                "name"=> "جایزان"
            ],
            [
                "state_id"=> "13",
                "name"=> "آبژدان"
            ],
            [
                "state_id"=> "13",
                "name"=> "قلعه خواجه"
            ],
            [
                "state_id"=> "13",
                "name"=> "آزادی"
            ],
            [
                "state_id"=> "13",
                "name"=> "اندیمشک"
            ],
            [
                "state_id"=> "13",
                "name"=> "بیدروبه"
            ],
            [
                "state_id"=> "13",
                "name"=> "چم گلک"
            ],
            [
                "state_id"=> "13",
                "name"=> "حسینیه"
            ],
            [
                "state_id"=> "13",
                "name"=> "الهایی"
            ],
            [
                "state_id"=> "13",
                "name"=> "اهواز"
            ],
            [
                "state_id"=> "13",
                "name"=> "ایذه"
            ],
            [
                "state_id"=> "13",
                "name"=> "دهدز"
            ],
            [
                "state_id"=> "13",
                "name"=> "باغ ملک"
            ],
            [
                "state_id"=> "13",
                "name"=> "صیدون"
            ],
            [
                "state_id"=> "13",
                "name"=> "قلعه تل"
            ],
            [
                "state_id"=> "13",
                "name"=> "میداود"
            ],
            [
                "state_id"=> "13",
                "name"=> "شیبان"
            ],
            [
                "state_id"=> "13",
                "name"=> "ملاثانی"
            ],
            [
                "state_id"=> "13",
                "name"=> "ویس"
            ],
            [
                "state_id"=> "13",
                "name"=> "بندرامام خمینی"
            ],
            [
                "state_id"=> "13",
                "name"=> "بندرماهشهر"
            ],
            [
                "state_id"=> "13",
                "name"=> "چمران"
            ],
            [
                "state_id"=> "13",
                "name"=> "بهبهان"
            ],
            [
                "state_id"=> "13",
                "name"=> "تشان"
            ],
            [
                "state_id"=> "13",
                "name"=> "سردشت"
            ],
            [
                "state_id"=> "13",
                "name"=> "منصوریه"
            ],
            [
                "state_id"=> "13",
                "name"=> "حمیدیه"
            ],
            [
                "state_id"=> "13",
                "name"=> "خرمشهر"
            ],
            [
                "state_id"=> "13",
                "name"=> "مقاومت"
            ],
            [
                "state_id"=> "13",
                "name"=> "مینوشهر"
            ],
            [
                "state_id"=> "13",
                "name"=> "چغامیش"
            ],
            [
                "state_id"=> "13",
                "name"=> "حمزه"
            ],
            [
                "state_id"=> "13",
                "name"=> "دزفول"
            ],
            [
                "state_id"=> "13",
                "name"=> "سالند"
            ],
            [
                "state_id"=> "13",
                "name"=> "سیاه منصور"
            ],
            [
                "state_id"=> "13",
                "name"=> "شمس آباد"
            ],
            [
                "state_id"=> "13",
                "name"=> "شهر امام"
            ],
            [
                "state_id"=> "13",
                "name"=> "صفی آباد"
            ],
            [
                "state_id"=> "13",
                "name"=> "میانرود"
            ],
            [
                "state_id"=> "13",
                "name"=> "ابوحمیظه"
            ],
            [
                "state_id"=> "13",
                "name"=> "بستان"
            ],
            [
                "state_id"=> "13",
                "name"=> "سوسنگرد"
            ],
            [
                "state_id"=> "13",
                "name"=> "کوت سیدنعیم"
            ],
            [
                "state_id"=> "13",
                "name"=> "رامشیر"
            ],
            [
                "state_id"=> "13",
                "name"=> "مشراگه"
            ],
            [
                "state_id"=> "13",
                "name"=> "رامهرمز"
            ],
            [
                "state_id"=> "13",
                "name"=> "خنافره"
            ],
            [
                "state_id"=> "13",
                "name"=> "دارخوین"
            ],
            [
                "state_id"=> "13",
                "name"=> "شادگان"
            ],
            [
                "state_id"=> "13",
                "name"=> "الوان"
            ],
            [
                "state_id"=> "13",
                "name"=> "حر"
            ],
            [
                "state_id"=> "13",
                "name"=> "شاوور"
            ],
            [
                "state_id"=> "13",
                "name"=> "شوش"
            ],
            [
                "state_id"=> "13",
                "name"=> "فتح المبین"
            ],
            [
                "state_id"=> "13",
                "name"=> "سرداران"
            ],
            [
                "state_id"=> "13",
                "name"=> "شرافت"
            ],
            [
                "state_id"=> "13",
                "name"=> "شوشتر"
            ],
            [
                "state_id"=> "13",
                "name"=> "گوریه"
            ],
            [
                "state_id"=> "13",
                "name"=> "کوت عبداله"
            ],
            [
                "state_id"=> "13",
                "name"=> "ترکالکی"
            ],
            [
                "state_id"=> "13",
                "name"=> "جنت مکان"
            ],
            [
                "state_id"=> "13",
                "name"=> "سماله"
            ],
            [
                "state_id"=> "13",
                "name"=> "صالح شهر"
            ],
            [
                "state_id"=> "13",
                "name"=> "گتوند"
            ],
            [
                "state_id"=> "13",
                "name"=> "لالی"
            ],
            [
                "state_id"=> "13",
                "name"=> "گلگیر"
            ],
            [
                "state_id"=> "13",
                "name"=> "مسجدسلیمان"
            ],
            [
                "state_id"=> "13",
                "name"=> "هفتگل"
            ],
            [
                "state_id"=> "13",
                "name"=> "زهره"
            ],
            [
                "state_id"=> "13",
                "name"=> "هندیجان"
            ],
            [
                "state_id"=> "13",
                "name"=> "رفیع"
            ],
            [
                "state_id"=> "13",
                "name"=> "هویزه"
            ],
            [
                "state_id"=> "14",
                "name"=> "ابهر"
            ],
            [
                "state_id"=> "14",
                "name"=> "صایین قلعه"
            ],
            [
                "state_id"=> "14",
                "name"=> "هیدج"
            ],
            [
                "state_id"=> "14",
                "name"=> "حلب"
            ],
            [
                "state_id"=> "14",
                "name"=> "زرین آباد"
            ],
            [
                "state_id"=> "14",
                "name"=> "زرین رود"
            ],
            [
                "state_id"=> "14",
                "name"=> "سجاس"
            ],
            [
                "state_id"=> "14",
                "name"=> "سهرورد"
            ],
            [
                "state_id"=> "14",
                "name"=> "قیدار"
            ],
            [
                "state_id"=> "14",
                "name"=> "کرسف"
            ],
            [
                "state_id"=> "14",
                "name"=> "گرماب"
            ],
            [
                "state_id"=> "14",
                "name"=> "نوربهار"
            ],
            [
                "state_id"=> "14",
                "name"=> "خرمدره"
            ],
            [
                "state_id"=> "14",
                "name"=> "ارمغانخانه"
            ],
            [
                "state_id"=> "14",
                "name"=> "زنجان"
            ],
            [
                "state_id"=> "14",
                "name"=> "نیک پی"
            ],
            [
                "state_id"=> "14",
                "name"=> "سلطانیه"
            ],
            [
                "state_id"=> "14",
                "name"=> "آب بر"
            ],
            [
                "state_id"=> "14",
                "name"=> "چورزق"
            ],
            [
                "state_id"=> "14",
                "name"=> "دندی"
            ],
            [
                "state_id"=> "14",
                "name"=> "ماه نشان"
            ],
            [
                "state_id"=> "15",
                "name"=> "آرادان"
            ],
            [
                "state_id"=> "15",
                "name"=> "کهن آباد"
            ],
            [
                "state_id"=> "15",
                "name"=> "امیریه"
            ],
            [
                "state_id"=> "15",
                "name"=> "دامغان"
            ],
            [
                "state_id"=> "15",
                "name"=> "دیباج"
            ],
            [
                "state_id"=> "15",
                "name"=> "کلاته"
            ],
            [
                "state_id"=> "15",
                "name"=> "سرخه"
            ],
            [
                "state_id"=> "15",
                "name"=> "سمنان"
            ],
            [
                "state_id"=> "15",
                "name"=> "بسطام"
            ],
            [
                "state_id"=> "15",
                "name"=> "بیارجمند"
            ],
            [
                "state_id"=> "15",
                "name"=> "رودیان"
            ],
            [
                "state_id"=> "15",
                "name"=> "شاهرود"
            ],
            [
                "state_id"=> "15",
                "name"=> "کلاته خیج"
            ],
            [
                "state_id"=> "15",
                "name"=> "مجن"
            ],
            [
                "state_id"=> "15",
                "name"=> "ایوانکی"
            ],
            [
                "state_id"=> "15",
                "name"=> "گرمسار"
            ],
            [
                "state_id"=> "15",
                "name"=> "درجزین"
            ],
            [
                "state_id"=> "15",
                "name"=> "شهمیرزاد"
            ],
            [
                "state_id"=> "15",
                "name"=> "مهدی شهر"
            ],
            [
                "state_id"=> "15",
                "name"=> "میامی"
            ],
            [
                "state_id"=> "16",
                "name"=> "ایرانشهر"
            ],
            [
                "state_id"=> "16",
                "name"=> "بزمان"
            ],
            [
                "state_id"=> "16",
                "name"=> "بمپور"
            ],
            [
                "state_id"=> "16",
                "name"=> "محمدان"
            ],
            [
                "state_id"=> "16",
                "name"=> "چابهار"
            ],
            [
                "state_id"=> "16",
                "name"=> "نگور"
            ],
            [
                "state_id"=> "16",
                "name"=> "خاش"
            ],
            [
                "state_id"=> "16",
                "name"=> "نوک آباد"
            ],
            [
                "state_id"=> "16",
                "name"=> "گلمورتی"
            ],
            [
                "state_id"=> "16",
                "name"=> "بنجار"
            ],
            [
                "state_id"=> "16",
                "name"=> "زابل"
            ],
            [
                "state_id"=> "16",
                "name"=> "زاهدان"
            ],
            [
                "state_id"=> "16",
                "name"=> "نصرت آباد"
            ],
            [
                "state_id"=> "16",
                "name"=> "زهک"
            ],
            [
                "state_id"=> "16",
                "name"=> "جالق"
            ],
            [
                "state_id"=> "16",
                "name"=> "سراوان"
            ],
            [
                "state_id"=> "16",
                "name"=> "سیرکان"
            ],
            [
                "state_id"=> "16",
                "name"=> "گشت"
            ],
            [
                "state_id"=> "16",
                "name"=> "محمدی"
            ],
            [
                "state_id"=> "16",
                "name"=> "پیشین"
            ],
            [
                "state_id"=> "16",
                "name"=> "راسک"
            ],
            [
                "state_id"=> "16",
                "name"=> "سرباز"
            ],
            [
                "state_id"=> "16",
                "name"=> "سوران"
            ],
            [
                "state_id"=> "16",
                "name"=> "هیدوچ"
            ],
            [
                "state_id"=> "16",
                "name"=> "فنوج"
            ],
            [
                "state_id"=> "16",
                "name"=> "قصرقند"
            ],
            [
                "state_id"=> "16",
                "name"=> "زرآباد"
            ],
            [
                "state_id"=> "16",
                "name"=> "کنارک"
            ],
            [
                "state_id"=> "16",
                "name"=> "مهرستان"
            ],
            [
                "state_id"=> "16",
                "name"=> "میرجاوه"
            ],
            [
                "state_id"=> "16",
                "name"=> "اسپکه"
            ],
            [
                "state_id"=> "16",
                "name"=> "بنت"
            ],
            [
                "state_id"=> "16",
                "name"=> "نیک شهر"
            ],
            [
                "state_id"=> "16",
                "name"=> "ادیمی"
            ],
            [
                "state_id"=> "16",
                "name"=> "شهرک علی اکبر"
            ],
            [
                "state_id"=> "16",
                "name"=> "محمدآباد"
            ],
            [
                "state_id"=> "16",
                "name"=> "دوست محمد"
            ],
            [
                "state_id"=> "17",
                "name"=> "آباده"
            ],
            [
                "state_id"=> "17",
                "name"=> "ایزدخواست"
            ],
            [
                "state_id"=> "17",
                "name"=> "بهمن"
            ],
            [
                "state_id"=> "17",
                "name"=> "سورمق"
            ],
            [
                "state_id"=> "17",
                "name"=> "صغاد"
            ],
            [
                "state_id"=> "17",
                "name"=> "ارسنجان"
            ],
            [
                "state_id"=> "17",
                "name"=> "استهبان"
            ],
            [
                "state_id"=> "17",
                "name"=> "ایج"
            ],
            [
                "state_id"=> "17",
                "name"=> "رونیز"
            ],
            [
                "state_id"=> "17",
                "name"=> "اقلید"
            ],
            [
                "state_id"=> "17",
                "name"=> "حسن اباد"
            ],
            [
                "state_id"=> "17",
                "name"=> "دژکرد"
            ],
            [
                "state_id"=> "17",
                "name"=> "سده"
            ],
            [
                "state_id"=> "17",
                "name"=> "بوانات"
            ],
            [
                "state_id"=> "17",
                "name"=> "حسامی"
            ],
            [
                "state_id"=> "17",
                "name"=> "کره ای"
            ],
            [
                "state_id"=> "17",
                "name"=> "مزایجان"
            ],
            [
                "state_id"=> "17",
                "name"=> "سعادت شهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "مادرسلیمان"
            ],
            [
                "state_id"=> "17",
                "name"=> "باب انار"
            ],
            [
                "state_id"=> "17",
                "name"=> "جهرم"
            ],
            [
                "state_id"=> "17",
                "name"=> "خاوران"
            ],
            [
                "state_id"=> "17",
                "name"=> "دوزه"
            ],
            [
                "state_id"=> "17",
                "name"=> "قطب آباد"
            ],
            [
                "state_id"=> "17",
                "name"=> "خرامه"
            ],
            [
                "state_id"=> "17",
                "name"=> "سلطان شهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "صفاشهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "قادراباد"
            ],
            [
                "state_id"=> "17",
                "name"=> "خنج"
            ],
            [
                "state_id"=> "17",
                "name"=> "جنت شهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "داراب"
            ],
            [
                "state_id"=> "17",
                "name"=> "دوبرجی"
            ],
            [
                "state_id"=> "17",
                "name"=> "فدامی"
            ],
            [
                "state_id"=> "17",
                "name"=> "کوپن"
            ],
            [
                "state_id"=> "17",
                "name"=> "مصیری"
            ],
            [
                "state_id"=> "17",
                "name"=> "حاجی آباد"
            ],
            [
                "state_id"=> "17",
                "name"=> "دبیران"
            ],
            [
                "state_id"=> "17",
                "name"=> "شهرپیر"
            ],
            [
                "state_id"=> "17",
                "name"=> "اردکان"
            ],
            [
                "state_id"=> "17",
                "name"=> "بیضا"
            ],
            [
                "state_id"=> "17",
                "name"=> "هماشهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "سروستان"
            ],
            [
                "state_id"=> "17",
                "name"=> "کوهنجان"
            ],
            [
                "state_id"=> "17",
                "name"=> "خانه زنیان"
            ],
            [
                "state_id"=> "17",
                "name"=> "داریان"
            ],
            [
                "state_id"=> "17",
                "name"=> "زرقان"
            ],
            [
                "state_id"=> "17",
                "name"=> "شهرصدرا"
            ],
            [
                "state_id"=> "17",
                "name"=> "شیراز"
            ],
            [
                "state_id"=> "17",
                "name"=> "لپویی"
            ],
            [
                "state_id"=> "17",
                "name"=> "دهرم"
            ],
            [
                "state_id"=> "17",
                "name"=> "فراشبند"
            ],
            [
                "state_id"=> "17",
                "name"=> "نوجین"
            ],
            [
                "state_id"=> "17",
                "name"=> "زاهدشهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "ششده"
            ],
            [
                "state_id"=> "17",
                "name"=> "فسا"
            ],
            [
                "state_id"=> "17",
                "name"=> "قره بلاغ"
            ],
            [
                "state_id"=> "17",
                "name"=> "میانشهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "نوبندگان"
            ],
            [
                "state_id"=> "17",
                "name"=> "فیروزآباد"
            ],
            [
                "state_id"=> "17",
                "name"=> "میمند"
            ],
            [
                "state_id"=> "17",
                "name"=> "افزر"
            ],
            [
                "state_id"=> "17",
                "name"=> "امام شهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "قیر"
            ],
            [
                "state_id"=> "17",
                "name"=> "کارزین (فتح آباد)"
            ],
            [
                "state_id"=> "17",
                "name"=> "مبارک آباددیز"
            ],
            [
                "state_id"=> "17",
                "name"=> "بالاده"
            ],
            [
                "state_id"=> "17",
                "name"=> "خشت"
            ],
            [
                "state_id"=> "17",
                "name"=> "قایمیه"
            ],
            [
                "state_id"=> "17",
                "name"=> "کازرون"
            ],
            [
                "state_id"=> "17",
                "name"=> "کنارتخته"
            ],
            [
                "state_id"=> "17",
                "name"=> "نودان"
            ],
            [
                "state_id"=> "17",
                "name"=> "کوار"
            ],
            [
                "state_id"=> "17",
                "name"=> "گراش"
            ],
            [
                "state_id"=> "17",
                "name"=> "اوز"
            ],
            [
                "state_id"=> "17",
                "name"=> "بنارویه"
            ],
            [
                "state_id"=> "17",
                "name"=> "بیرم"
            ],
            [
                "state_id"=> "17",
                "name"=> "جویم"
            ],
            [
                "state_id"=> "17",
                "name"=> "خور"
            ],
            [
                "state_id"=> "17",
                "name"=> "عمادده"
            ],
            [
                "state_id"=> "17",
                "name"=> "لار"
            ],
            [
                "state_id"=> "17",
                "name"=> "لطیفی"
            ],
            [
                "state_id"=> "17",
                "name"=> "اشکنان"
            ],
            [
                "state_id"=> "17",
                "name"=> "اهل"
            ],
            [
                "state_id"=> "17",
                "name"=> "علامرودشت"
            ],
            [
                "state_id"=> "17",
                "name"=> "لامرد"
            ],
            [
                "state_id"=> "17",
                "name"=> "خانیمن"
            ],
            [
                "state_id"=> "17",
                "name"=> "رامجرد"
            ],
            [
                "state_id"=> "17",
                "name"=> "سیدان"
            ],
            [
                "state_id"=> "17",
                "name"=> "کامفیروز"
            ],
            [
                "state_id"=> "17",
                "name"=> "مرودشت"
            ],
            [
                "state_id"=> "17",
                "name"=> "بابامنیر"
            ],
            [
                "state_id"=> "17",
                "name"=> "خومه زار"
            ],
            [
                "state_id"=> "17",
                "name"=> "نورآباد"
            ],
            [
                "state_id"=> "17",
                "name"=> "اسیر"
            ],
            [
                "state_id"=> "17",
                "name"=> "خوزی"
            ],
            [
                "state_id"=> "17",
                "name"=> "گله دار"
            ],
            [
                "state_id"=> "17",
                "name"=> "مهر"
            ],
            [
                "state_id"=> "17",
                "name"=> "وراوی"
            ],
            [
                "state_id"=> "17",
                "name"=> "آباده طشک"
            ],
            [
                "state_id"=> "17",
                "name"=> "قطرویه"
            ],
            [
                "state_id"=> "17",
                "name"=> "مشکان"
            ],
            [
                "state_id"=> "17",
                "name"=> "نی ریز"
            ],
            [
                "state_id"=> "18",
                "name"=> "آبیک"
            ],
            [
                "state_id"=> "18",
                "name"=> "خاکعلی"
            ],
            [
                "state_id"=> "18",
                "name"=> "آبگرم"
            ],
            [
                "state_id"=> "18",
                "name"=> "آوج"
            ],
            [
                "state_id"=> "18",
                "name"=> "الوند"
            ],
            [
                "state_id"=> "18",
                "name"=> "بیدستان"
            ],
            [
                "state_id"=> "18",
                "name"=> "شریفیه"
            ],
            [
                "state_id"=> "18",
                "name"=> "محمدیه"
            ],
            [
                "state_id"=> "18",
                "name"=> "ارداق"
            ],
            [
                "state_id"=> "18",
                "name"=> "بویین زهرا"
            ],
            [
                "state_id"=> "18",
                "name"=> "دانسفهان"
            ],
            [
                "state_id"=> "18",
                "name"=> "سگزآباد"
            ],
            [
                "state_id"=> "18",
                "name"=> "شال"
            ],
            [
                "state_id"=> "18",
                "name"=> "اسفرورین"
            ],
            [
                "state_id"=> "18",
                "name"=> "تاکستان"
            ],
            [
                "state_id"=> "18",
                "name"=> "خرمدشت"
            ],
            [
                "state_id"=> "18",
                "name"=> "ضیاڈآباد"
            ],
            [
                "state_id"=> "18",
                "name"=> "نرجه"
            ],
            [
                "state_id"=> "18",
                "name"=> "اقبالیه"
            ],
            [
                "state_id"=> "18",
                "name"=> "رازمیان"
            ],
            [
                "state_id"=> "18",
                "name"=> "سیردان"
            ],
            [
                "state_id"=> "18",
                "name"=> "قزوین"
            ],
            [
                "state_id"=> "18",
                "name"=> "کوهین"
            ],
            [
                "state_id"=> "18",
                "name"=> "محمودآبادنمونه"
            ],
            [
                "state_id"=> "18",
                "name"=> "معلم کلایه"
            ],
            [
                "state_id"=> "19",
                "name"=> "جعفریه"
            ],
            [
                "state_id"=> "19",
                "name"=> "دستجرد"
            ],
            [
                "state_id"=> "19",
                "name"=> "سلفچگان"
            ],
            [
                "state_id"=> "19",
                "name"=> "قم"
            ],
            [
                "state_id"=> "19",
                "name"=> "قنوات"
            ],
            [
                "state_id"=> "19",
                "name"=> "کهک"
            ],
            [
                "state_id"=> "20",
                "name"=> "آرمرده"
            ],
            [
                "state_id"=> "20",
                "name"=> "بانه"
            ],
            [
                "state_id"=> "20",
                "name"=> "بویین سفلی"
            ],
            [
                "state_id"=> "20",
                "name"=> "کانی سور"
            ],
            [
                "state_id"=> "20",
                "name"=> "بابارشانی"
            ],
            [
                "state_id"=> "20",
                "name"=> "بیجار"
            ],
            [
                "state_id"=> "20",
                "name"=> "پیرتاج"
            ],
            [
                "state_id"=> "20",
                "name"=> "توپ آغاج"
            ],
            [
                "state_id"=> "20",
                "name"=> "یاسوکند"
            ],
            [
                "state_id"=> "20",
                "name"=> "بلبان آباد"
            ],
            [
                "state_id"=> "20",
                "name"=> "دهگلان"
            ],
            [
                "state_id"=> "20",
                "name"=> "دیواندره"
            ],
            [
                "state_id"=> "20",
                "name"=> "زرینه"
            ],
            [
                "state_id"=> "20",
                "name"=> "اورامان تخت"
            ],
            [
                "state_id"=> "20",
                "name"=> "سروآباد"
            ],
            [
                "state_id"=> "20",
                "name"=> "سقز"
            ],
            [
                "state_id"=> "20",
                "name"=> "صاحب"
            ],
            [
                "state_id"=> "20",
                "name"=> "سنندج"
            ],
            [
                "state_id"=> "20",
                "name"=> "شویشه"
            ],
            [
                "state_id"=> "20",
                "name"=> "دزج"
            ],
            [
                "state_id"=> "20",
                "name"=> "دلبران"
            ],
            [
                "state_id"=> "20",
                "name"=> "سریش آباد"
            ],
            [
                "state_id"=> "20",
                "name"=> "قروه"
            ],
            [
                "state_id"=> "20",
                "name"=> "کامیاران"
            ],
            [
                "state_id"=> "20",
                "name"=> "موچش"
            ],
            [
                "state_id"=> "20",
                "name"=> "برده رشه"
            ],
            [
                "state_id"=> "20",
                "name"=> "چناره"
            ],
            [
                "state_id"=> "20",
                "name"=> "کانی دینار"
            ],
            [
                "state_id"=> "20",
                "name"=> "مریوان"
            ],
            [
                "state_id"=> "21",
                "name"=> "ارزوییه"
            ],
            [
                "state_id"=> "21",
                "name"=> "امین شهر"
            ],
            [
                "state_id"=> "21",
                "name"=> "انار"
            ],
            [
                "state_id"=> "21",
                "name"=> "بافت"
            ],
            [
                "state_id"=> "21",
                "name"=> "بزنجان"
            ],
            [
                "state_id"=> "21",
                "name"=> "بردسیر"
            ],
            [
                "state_id"=> "21",
                "name"=> "دشتکار"
            ],
            [
                "state_id"=> "21",
                "name"=> "گلزار"
            ],
            [
                "state_id"=> "21",
                "name"=> "لاله زار"
            ],
            [
                "state_id"=> "21",
                "name"=> "نگار"
            ],
            [
                "state_id"=> "21",
                "name"=> "بروات"
            ],
            [
                "state_id"=> "21",
                "name"=> "بم"
            ],
            [
                "state_id"=> "21",
                "name"=> "بلوک"
            ],
            [
                "state_id"=> "21",
                "name"=> "جبالبارز"
            ],
            [
                "state_id"=> "21",
                "name"=> "جیرفت"
            ],
            [
                "state_id"=> "21",
                "name"=> "درب بهشت"
            ],
            [
                "state_id"=> "21",
                "name"=> "رابر"
            ],
            [
                "state_id"=> "21",
                "name"=> "هنزا"
            ],
            [
                "state_id"=> "21",
                "name"=> "راور"
            ],
            [
                "state_id"=> "21",
                "name"=> "هجدک"
            ],
            [
                "state_id"=> "21",
                "name"=> "بهرمان"
            ],
            [
                "state_id"=> "21",
                "name"=> "رفسنجان"
            ],
            [
                "state_id"=> "21",
                "name"=> "صفاییه"
            ],
            [
                "state_id"=> "21",
                "name"=> "کشکوییه"
            ],
            [
                "state_id"=> "21",
                "name"=> "مس سرچشمه"
            ],
            [
                "state_id"=> "21",
                "name"=> "رودبار"
            ],
            [
                "state_id"=> "21",
                "name"=> "زهکلوت"
            ],
            [
                "state_id"=> "21",
                "name"=> "گنبکی"
            ],
            [
                "state_id"=> "21",
                "name"=> "محمدآباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "خانوک"
            ],
            [
                "state_id"=> "21",
                "name"=> "ریحان"
            ],
            [
                "state_id"=> "21",
                "name"=> "زرند"
            ],
            [
                "state_id"=> "21",
                "name"=> "یزدان شهر"
            ],
            [
                "state_id"=> "21",
                "name"=> "بلورد"
            ],
            [
                "state_id"=> "21",
                "name"=> "پاریز"
            ],
            [
                "state_id"=> "21",
                "name"=> "خواجو شهر"
            ],
            [
                "state_id"=> "21",
                "name"=> "زیدآباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "سیرجان"
            ],
            [
                "state_id"=> "21",
                "name"=> "نجف شهر"
            ],
            [
                "state_id"=> "21",
                "name"=> "هماشهر"
            ],
            [
                "state_id"=> "21",
                "name"=> "جوزم"
            ],
            [
                "state_id"=> "21",
                "name"=> "خاتون اباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "خورسند"
            ],
            [
                "state_id"=> "21",
                "name"=> "دهج"
            ],
            [
                "state_id"=> "21",
                "name"=> "شهربابک"
            ],
            [
                "state_id"=> "21",
                "name"=> "دوساری"
            ],
            [
                "state_id"=> "21",
                "name"=> "عنبرآباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "مردهک"
            ],
            [
                "state_id"=> "21",
                "name"=> "فاریاب"
            ],
            [
                "state_id"=> "21",
                "name"=> "فهرج"
            ],
            [
                "state_id"=> "21",
                "name"=> "قلعه گنج"
            ],
            [
                "state_id"=> "21",
                "name"=> "اختیارآباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "اندوهجرد"
            ],
            [
                "state_id"=> "21",
                "name"=> "باغین"
            ],
            [
                "state_id"=> "21",
                "name"=> "جوپار"
            ],
            [
                "state_id"=> "21",
                "name"=> "چترود"
            ],
            [
                "state_id"=> "21",
                "name"=> "راین"
            ],
            [
                "state_id"=> "21",
                "name"=> "زنگی آباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "شهداد"
            ],
            [
                "state_id"=> "21",
                "name"=> "کاظم آباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "کرمان"
            ],
            [
                "state_id"=> "21",
                "name"=> "گلباف"
            ],
            [
                "state_id"=> "21",
                "name"=> "ماهان"
            ],
            [
                "state_id"=> "21",
                "name"=> "محی آباد"
            ],
            [
                "state_id"=> "21",
                "name"=> "کوهبنان"
            ],
            [
                "state_id"=> "21",
                "name"=> "کیانشهر"
            ],
            [
                "state_id"=> "21",
                "name"=> "کهنوج"
            ],
            [
                "state_id"=> "21",
                "name"=> "منوجان"
            ],
            [
                "state_id"=> "21",
                "name"=> "نودژ"
            ],
            [
                "state_id"=> "21",
                "name"=> "نرماشیر"
            ],
            [
                "state_id"=> "21",
                "name"=> "نظام شهر"
            ],
            [
                "state_id"=> "22",
                "name"=> "اسلام آبادغرب"
            ],
            [
                "state_id"=> "22",
                "name"=> "حمیل"
            ],
            [
                "state_id"=> "22",
                "name"=> "بانوره"
            ],
            [
                "state_id"=> "22",
                "name"=> "باینگان"
            ],
            [
                "state_id"=> "22",
                "name"=> "پاوه"
            ],
            [
                "state_id"=> "22",
                "name"=> "نودشه"
            ],
            [
                "state_id"=> "22",
                "name"=> "نوسود"
            ],
            [
                "state_id"=> "22",
                "name"=> "ازگله"
            ],
            [
                "state_id"=> "22",
                "name"=> "تازه آباد"
            ],
            [
                "state_id"=> "22",
                "name"=> "جوانرود"
            ],
            [
                "state_id"=> "22",
                "name"=> "ریجاب"
            ],
            [
                "state_id"=> "22",
                "name"=> "کرند"
            ],
            [
                "state_id"=> "22",
                "name"=> "گهواره"
            ],
            [
                "state_id"=> "22",
                "name"=> "روانسر"
            ],
            [
                "state_id"=> "22",
                "name"=> "شاهو"
            ],
            [
                "state_id"=> "22",
                "name"=> "سرپل ذهاب"
            ],
            [
                "state_id"=> "22",
                "name"=> "سطر"
            ],
            [
                "state_id"=> "22",
                "name"=> "سنقر"
            ],
            [
                "state_id"=> "22",
                "name"=> "صحنه"
            ],
            [
                "state_id"=> "22",
                "name"=> "میان راهان"
            ],
            [
                "state_id"=> "22",
                "name"=> "سومار"
            ],
            [
                "state_id"=> "22",
                "name"=> "قصرشیرین"
            ],
            [
                "state_id"=> "22",
                "name"=> "رباط"
            ],
            [
                "state_id"=> "22",
                "name"=> "کرمانشاه"
            ],
            [
                "state_id"=> "22",
                "name"=> "کوزران"
            ],
            [
                "state_id"=> "22",
                "name"=> "هلشی"
            ],
            [
                "state_id"=> "22",
                "name"=> "کنگاور"
            ],
            [
                "state_id"=> "22",
                "name"=> "گودین"
            ],
            [
                "state_id"=> "22",
                "name"=> "سرمست"
            ],
            [
                "state_id"=> "22",
                "name"=> "گیلانغرب"
            ],
            [
                "state_id"=> "22",
                "name"=> "بیستون"
            ],
            [
                "state_id"=> "22",
                "name"=> "هرسین"
            ],
            [
                "state_id"=> "23",
                "name"=> "باشت"
            ],
            [
                "state_id"=> "23",
                "name"=> "چیتاب"
            ],
            [
                "state_id"=> "23",
                "name"=> "گراب سفلی"
            ],
            [
                "state_id"=> "23",
                "name"=> "مادوان"
            ],
            [
                "state_id"=> "23",
                "name"=> "مارگون"
            ],
            [
                "state_id"=> "23",
                "name"=> "یاسوج"
            ],
            [
                "state_id"=> "23",
                "name"=> "لیکک"
            ],
            [
                "state_id"=> "23",
                "name"=> "چرام"
            ],
            [
                "state_id"=> "23",
                "name"=> "سرفاریاب"
            ],
            [
                "state_id"=> "23",
                "name"=> "پاتاوه"
            ],
            [
                "state_id"=> "23",
                "name"=> "سی سخت"
            ],
            [
                "state_id"=> "23",
                "name"=> "دهدشت"
            ],
            [
                "state_id"=> "23",
                "name"=> "دیشموک"
            ],
            [
                "state_id"=> "23",
                "name"=> "سوق"
            ],
            [
                "state_id"=> "23",
                "name"=> "قلعه رییسی"
            ],
            [
                "state_id"=> "23",
                "name"=> "دوگنبدان"
            ],
            [
                "state_id"=> "23",
                "name"=> "لنده"
            ],
            [
                "state_id"=> "24",
                "name"=> "آزادشهر"
            ],
            [
                "state_id"=> "24",
                "name"=> "نگین شهر"
            ],
            [
                "state_id"=> "24",
                "name"=> "نوده خاندوز"
            ],
            [
                "state_id"=> "24",
                "name"=> "آق قلا"
            ],
            [
                "state_id"=> "24",
                "name"=> "انبارآلوم"
            ],
            [
                "state_id"=> "24",
                "name"=> "بندرگز"
            ],
            [
                "state_id"=> "24",
                "name"=> "نوکنده"
            ],
            [
                "state_id"=> "24",
                "name"=> "بندرترکمن"
            ],
            [
                "state_id"=> "24",
                "name"=> "تاتارعلیا"
            ],
            [
                "state_id"=> "24",
                "name"=> "خان ببین"
            ],
            [
                "state_id"=> "24",
                "name"=> "دلند"
            ],
            [
                "state_id"=> "24",
                "name"=> "رامیان"
            ],
            [
                "state_id"=> "24",
                "name"=> "سنگدوین"
            ],
            [
                "state_id"=> "24",
                "name"=> "علی اباد"
            ],
            [
                "state_id"=> "24",
                "name"=> "فاضل آباد"
            ],
            [
                "state_id"=> "24",
                "name"=> "مزرعه"
            ],
            [
                "state_id"=> "24",
                "name"=> "کردکوی"
            ],
            [
                "state_id"=> "24",
                "name"=> "فراغی"
            ],
            [
                "state_id"=> "24",
                "name"=> "کلاله"
            ],
            [
                "state_id"=> "24",
                "name"=> "گالیکش"
            ],
            [
                "state_id"=> "24",
                "name"=> "جلین"
            ],
            [
                "state_id"=> "24",
                "name"=> "سرخنکلاته"
            ],
            [
                "state_id"=> "24",
                "name"=> "گرگان"
            ],
            [
                "state_id"=> "24",
                "name"=> "سیمین شهر"
            ],
            [
                "state_id"=> "24",
                "name"=> "گمیش تپه"
            ],
            [
                "state_id"=> "24",
                "name"=> "اینچه برون"
            ],
            [
                "state_id"=> "24",
                "name"=> "گنبدکاووس"
            ],
            [
                "state_id"=> "24",
                "name"=> "مراوه"
            ],
            [
                "state_id"=> "24",
                "name"=> "مینودشت"
            ],
            [
                "state_id"=> "25",
                "name"=> "آستارا"
            ],
            [
                "state_id"=> "25",
                "name"=> "لوندویل"
            ],
            [
                "state_id"=> "25",
                "name"=> "آستانه اشرفیه"
            ],
            [
                "state_id"=> "25",
                "name"=> "کیاشهر"
            ],
            [
                "state_id"=> "25",
                "name"=> "املش"
            ],
            [
                "state_id"=> "25",
                "name"=> "رانکوه"
            ],
            [
                "state_id"=> "25",
                "name"=> "بندرانزلی"
            ],
            [
                "state_id"=> "25",
                "name"=> "خشکبیجار"
            ],
            [
                "state_id"=> "25",
                "name"=> "خمام"
            ],
            [
                "state_id"=> "25",
                "name"=> "رشت"
            ],
            [
                "state_id"=> "25",
                "name"=> "سنگر"
            ],
            [
                "state_id"=> "25",
                "name"=> "کوچصفهان"
            ],
            [
                "state_id"=> "25",
                "name"=> "لشت نشاء"
            ],
            [
                "state_id"=> "25",
                "name"=> "لولمان"
            ],
            [
                "state_id"=> "25",
                "name"=> "پره سر"
            ],
            [
                "state_id"=> "25",
                "name"=> "رضوانشهر"
            ],
            [
                "state_id"=> "25",
                "name"=> "بره سر"
            ],
            [
                "state_id"=> "25",
                "name"=> "توتکابن"
            ],
            [
                "state_id"=> "25",
                "name"=> "جیرنده"
            ],
            [
                "state_id"=> "25",
                "name"=> "رستم آباد"
            ],
            [
                "state_id"=> "25",
                "name"=> "رودبار"
            ],
            [
                "state_id"=> "25",
                "name"=> "لوشان"
            ],
            [
                "state_id"=> "25",
                "name"=> "منجیل"
            ],
            [
                "state_id"=> "25",
                "name"=> "چابکسر"
            ],
            [
                "state_id"=> "25",
                "name"=> "رحیم آباد"
            ],
            [
                "state_id"=> "25",
                "name"=> "رودسر"
            ],
            [
                "state_id"=> "25",
                "name"=> "کلاچای"
            ],
            [
                "state_id"=> "25",
                "name"=> "واجارگاه"
            ],
            [
                "state_id"=> "25",
                "name"=> "دیلمان"
            ],
            [
                "state_id"=> "25",
                "name"=> "سیاهکل"
            ],
            [
                "state_id"=> "25",
                "name"=> "احمدسرگوراب"
            ],
            [
                "state_id"=> "25",
                "name"=> "شفت"
            ],
            [
                "state_id"=> "25",
                "name"=> "صومعه سرا"
            ],
            [
                "state_id"=> "25",
                "name"=> "گوراب زرمیخ"
            ],
            [
                "state_id"=> "25",
                "name"=> "مرجقل"
            ],
            [
                "state_id"=> "25",
                "name"=> "اسالم"
            ],
            [
                "state_id"=> "25",
                "name"=> "چوبر"
            ],
            [
                "state_id"=> "25",
                "name"=> "حویق"
            ],
            [
                "state_id"=> "25",
                "name"=> "لیسار"
            ],
            [
                "state_id"=> "25",
                "name"=> "هشتپر (تالش)"
            ],
            [
                "state_id"=> "25",
                "name"=> "فومن"
            ],
            [
                "state_id"=> "25",
                "name"=> "ماسوله"
            ],
            [
                "state_id"=> "25",
                "name"=> "ماکلوان"
            ],
            [
                "state_id"=> "25",
                "name"=> "رودبنه"
            ],
            [
                "state_id"=> "25",
                "name"=> "لاهیجان"
            ],
            [
                "state_id"=> "25",
                "name"=> "اطاقور"
            ],
            [
                "state_id"=> "25",
                "name"=> "چاف و چمخاله"
            ],
            [
                "state_id"=> "25",
                "name"=> "شلمان"
            ],
            [
                "state_id"=> "25",
                "name"=> "کومله"
            ],
            [
                "state_id"=> "25",
                "name"=> "لنگرود"
            ],
            [
                "state_id"=> "25",
                "name"=> "بازار جمعه"
            ],
            [
                "state_id"=> "25",
                "name"=> "ماسال"
            ],
            [
                "state_id"=> "26",
                "name"=> "ازنا"
            ],
            [
                "state_id"=> "26",
                "name"=> "مومن آباد"
            ],
            [
                "state_id"=> "26",
                "name"=> "الیگودرز"
            ],
            [
                "state_id"=> "26",
                "name"=> "شول آباد"
            ],
            [
                "state_id"=> "26",
                "name"=> "اشترینان"
            ],
            [
                "state_id"=> "26",
                "name"=> "بروجرد"
            ],
            [
                "state_id"=> "26",
                "name"=> "پلدختر"
            ],
            [
                "state_id"=> "26",
                "name"=> "معمولان"
            ],
            [
                "state_id"=> "26",
                "name"=> "بیران شهر"
            ],
            [
                "state_id"=> "26",
                "name"=> "خرم آباد"
            ],
            [
                "state_id"=> "26",
                "name"=> "زاغه"
            ],
            [
                "state_id"=> "26",
                "name"=> "سپیددشت"
            ],
            [
                "state_id"=> "26",
                "name"=> "نورآباد"
            ],
            [
                "state_id"=> "26",
                "name"=> "هفت چشمه"
            ],
            [
                "state_id"=> "26",
                "name"=> "چالانچولان"
            ],
            [
                "state_id"=> "26",
                "name"=> "دورود"
            ],
            [
                "state_id"=> "26",
                "name"=> "سراب دوره"
            ],
            [
                "state_id"=> "26",
                "name"=> "ویسیان"
            ],
            [
                "state_id"=> "26",
                "name"=> "چقابل"
            ],
            [
                "state_id"=> "26",
                "name"=> "الشتر"
            ],
            [
                "state_id"=> "26",
                "name"=> "فیروزآباد"
            ],
            [
                "state_id"=> "26",
                "name"=> "درب گنبد"
            ],
            [
                "state_id"=> "26",
                "name"=> "کوهدشت"
            ],
            [
                "state_id"=> "26",
                "name"=> "کوهنانی"
            ],
            [
                "state_id"=> "26",
                "name"=> "گراب"
            ],
            [
                "state_id"=> "27",
                "name"=> "آمل"
            ],
            [
                "state_id"=> "27",
                "name"=> "امامزاده عبدالله"
            ],
            [
                "state_id"=> "27",
                "name"=> "دابودشت"
            ],
            [
                "state_id"=> "27",
                "name"=> "رینه"
            ],
            [
                "state_id"=> "27",
                "name"=> "گزنک"
            ],
            [
                "state_id"=> "27",
                "name"=> "امیرکلا"
            ],
            [
                "state_id"=> "27",
                "name"=> "بابل"
            ],
            [
                "state_id"=> "27",
                "name"=> "خوش رودپی"
            ],
            [
                "state_id"=> "27",
                "name"=> "زرگرمحله"
            ],
            [
                "state_id"=> "27",
                "name"=> "گتاب"
            ],
            [
                "state_id"=> "27",
                "name"=> "مرزیکلا"
            ],
            [
                "state_id"=> "27",
                "name"=> "بابلسر"
            ],
            [
                "state_id"=> "27",
                "name"=> "بهنمیر"
            ],
            [
                "state_id"=> "27",
                "name"=> "هادی شهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "بهشهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "خلیل شهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "رستمکلا"
            ],
            [
                "state_id"=> "27",
                "name"=> "تنکابن"
            ],
            [
                "state_id"=> "27",
                "name"=> "خرم آباد"
            ],
            [
                "state_id"=> "27",
                "name"=> "شیرود"
            ],
            [
                "state_id"=> "27",
                "name"=> "نشتارود"
            ],
            [
                "state_id"=> "27",
                "name"=> "جویبار"
            ],
            [
                "state_id"=> "27",
                "name"=> "کوهی خیل"
            ],
            [
                "state_id"=> "27",
                "name"=> "چالوس"
            ],
            [
                "state_id"=> "27",
                "name"=> "مرزن آباد"
            ],
            [
                "state_id"=> "27",
                "name"=> "هچیرود"
            ],
            [
                "state_id"=> "27",
                "name"=> "رامسر"
            ],
            [
                "state_id"=> "27",
                "name"=> "کتالم وسادات شهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "پایین هولار"
            ],
            [
                "state_id"=> "27",
                "name"=> "ساری"
            ],
            [
                "state_id"=> "27",
                "name"=> "فریم"
            ],
            [
                "state_id"=> "27",
                "name"=> "کیاسر"
            ],
            [
                "state_id"=> "27",
                "name"=> "آلاشت"
            ],
            [
                "state_id"=> "27",
                "name"=> "پل سفید"
            ],
            [
                "state_id"=> "27",
                "name"=> "زیرآب"
            ],
            [
                "state_id"=> "27",
                "name"=> "شیرگاه"
            ],
            [
                "state_id"=> "27",
                "name"=> "کیاکلا"
            ],
            [
                "state_id"=> "27",
                "name"=> "سلمان شهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "عباس اباد"
            ],
            [
                "state_id"=> "27",
                "name"=> "کلارآباد"
            ],
            [
                "state_id"=> "27",
                "name"=> "فریدونکنار"
            ],
            [
                "state_id"=> "27",
                "name"=> "ارطه"
            ],
            [
                "state_id"=> "27",
                "name"=> "قائم شهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "کلاردشت"
            ],
            [
                "state_id"=> "27",
                "name"=> "گلوگاه"
            ],
            [
                "state_id"=> "27",
                "name"=> "سرخرود"
            ],
            [
                "state_id"=> "27",
                "name"=> "محمودآباد"
            ],
            [
                "state_id"=> "27",
                "name"=> "سورک"
            ],
            [
                "state_id"=> "27",
                "name"=> "نکا"
            ],
            [
                "state_id"=> "27",
                "name"=> "ایزدشهر"
            ],
            [
                "state_id"=> "27",
                "name"=> "بلده"
            ],
            [
                "state_id"=> "27",
                "name"=> "چمستان"
            ],
            [
                "state_id"=> "27",
                "name"=> "رویان"
            ],
            [
                "state_id"=> "27",
                "name"=> "نور"
            ],
            [
                "state_id"=> "27",
                "name"=> "پول"
            ],
            [
                "state_id"=> "27",
                "name"=> "کجور"
            ],
            [
                "state_id"=> "27",
                "name"=> "نوشهر"
            ],
            [
                "state_id"=> "28",
                "name"=> "آشتیان"
            ],
            [
                "state_id"=> "28",
                "name"=> "اراک"
            ],
            [
                "state_id"=> "28",
                "name"=> "داودآباد"
            ],
            [
                "state_id"=> "28",
                "name"=> "ساروق"
            ],
            [
                "state_id"=> "28",
                "name"=> "کارچان"
            ],
            [
                "state_id"=> "28",
                "name"=> "تفرش"
            ],
            [
                "state_id"=> "28",
                "name"=> "خمین"
            ],
            [
                "state_id"=> "28",
                "name"=> "قورچی باشی"
            ],
            [
                "state_id"=> "28",
                "name"=> "جاورسیان"
            ],
            [
                "state_id"=> "28",
                "name"=> "خنداب"
            ],
            [
                "state_id"=> "28",
                "name"=> "دلیجان"
            ],
            [
                "state_id"=> "28",
                "name"=> "نراق"
            ],
            [
                "state_id"=> "28",
                "name"=> "پرندک"
            ],
            [
                "state_id"=> "28",
                "name"=> "خشکرود"
            ],
            [
                "state_id"=> "28",
                "name"=> "رازقان"
            ],
            [
                "state_id"=> "28",
                "name"=> "زاویه"
            ],
            [
                "state_id"=> "28",
                "name"=> "مامونیه"
            ],
            [
                "state_id"=> "28",
                "name"=> "آوه"
            ],
            [
                "state_id"=> "28",
                "name"=> "ساوه"
            ],
            [
                "state_id"=> "28",
                "name"=> "غرق آباد"
            ],
            [
                "state_id"=> "28",
                "name"=> "نوبران"
            ],
            [
                "state_id"=> "28",
                "name"=> "آستانه"
            ],
            [
                "state_id"=> "28",
                "name"=> "توره"
            ],
            [
                "state_id"=> "28",
                "name"=> "شازند"
            ],
            [
                "state_id"=> "28",
                "name"=> "شهباز"
            ],
            [
                "state_id"=> "28",
                "name"=> "مهاجران"
            ],
            [
                "state_id"=> "28",
                "name"=> "هندودر"
            ],
            [
                "state_id"=> "28",
                "name"=> "خنجین"
            ],
            [
                "state_id"=> "28",
                "name"=> "فرمهین"
            ],
            [
                "state_id"=> "28",
                "name"=> "کمیجان"
            ],
            [
                "state_id"=> "28",
                "name"=> "میلاجرد"
            ],
            [
                "state_id"=> "28",
                "name"=> "محلات"
            ],
            [
                "state_id"=> "28",
                "name"=> "نیمور"
            ],
            [
                "state_id"=> "29",
                "name"=> "ابوموسی"
            ],
            [
                "state_id"=> "29",
                "name"=> "بستک"
            ],
            [
                "state_id"=> "29",
                "name"=> "جناح"
            ],
            [
                "state_id"=> "29",
                "name"=> "سردشت"
            ],
            [
                "state_id"=> "29",
                "name"=> "گوهران"
            ],
            [
                "state_id"=> "29",
                "name"=> "بندرعباس"
            ],
            [
                "state_id"=> "29",
                "name"=> "تازیان پایین"
            ],
            [
                "state_id"=> "29",
                "name"=> "تخت"
            ],
            [
                "state_id"=> "29",
                "name"=> "فین"
            ],
            [
                "state_id"=> "29",
                "name"=> "قلعه قاضی"
            ],
            [
                "state_id"=> "29",
                "name"=> "بندرلنگه"
            ],
            [
                "state_id"=> "29",
                "name"=> "چارک"
            ],
            [
                "state_id"=> "29",
                "name"=> "کنگ"
            ],
            [
                "state_id"=> "29",
                "name"=> "کیش"
            ],
            [
                "state_id"=> "29",
                "name"=> "لمزان"
            ],
            [
                "state_id"=> "29",
                "name"=> "پارسیان"
            ],
            [
                "state_id"=> "29",
                "name"=> "دشتی"
            ],
            [
                "state_id"=> "29",
                "name"=> "کوشکنار"
            ],
            [
                "state_id"=> "29",
                "name"=> "بندرجاسک"
            ],
            [
                "state_id"=> "29",
                "name"=> "حاجی اباد"
            ],
            [
                "state_id"=> "29",
                "name"=> "سرگز"
            ],
            [
                "state_id"=> "29",
                "name"=> "فارغان"
            ],
            [
                "state_id"=> "29",
                "name"=> "خمیر"
            ],
            [
                "state_id"=> "29",
                "name"=> "رویدر"
            ],
            [
                "state_id"=> "29",
                "name"=> "بیکاء"
            ],
            [
                "state_id"=> "29",
                "name"=> "دهبارز"
            ],
            [
                "state_id"=> "29",
                "name"=> "زیارتعلی"
            ],
            [
                "state_id"=> "29",
                "name"=> "سیریک"
            ],
            [
                "state_id"=> "29",
                "name"=> "کوهستک"
            ],
            [
                "state_id"=> "29",
                "name"=> "گروک"
            ],
            [
                "state_id"=> "29",
                "name"=> "درگهان"
            ],
            [
                "state_id"=> "29",
                "name"=> "سوزا"
            ],
            [
                "state_id"=> "29",
                "name"=> "قشم"
            ],
            [
                "state_id"=> "29",
                "name"=> "هرمز"
            ],
            [
                "state_id"=> "29",
                "name"=> "تیرور"
            ],
            [
                "state_id"=> "29",
                "name"=> "سندرک"
            ],
            [
                "state_id"=> "29",
                "name"=> "میناب"
            ],
            [
                "state_id"=> "29",
                "name"=> "هشتبندی"
            ],
            [
                "state_id"=> "30",
                "name"=> "آجین"
            ],
            [
                "state_id"=> "30",
                "name"=> "اسدآباد"
            ],
            [
                "state_id"=> "30",
                "name"=> "بهار"
            ],
            [
                "state_id"=> "30",
                "name"=> "صالح آباد"
            ],
            [
                "state_id"=> "30",
                "name"=> "لالجین"
            ],
            [
                "state_id"=> "30",
                "name"=> "مهاجران"
            ],
            [
                "state_id"=> "30",
                "name"=> "تویسرکان"
            ],
            [
                "state_id"=> "30",
                "name"=> "سرکان"
            ],
            [
                "state_id"=> "30",
                "name"=> "فرسفج"
            ],
            [
                "state_id"=> "30",
                "name"=> "دمق"
            ],
            [
                "state_id"=> "30",
                "name"=> "رزن"
            ],
            [
                "state_id"=> "30",
                "name"=> "قروه درجزین"
            ],
            [
                "state_id"=> "30",
                "name"=> "فامنین"
            ],
            [
                "state_id"=> "30",
                "name"=> "شیرین سو"
            ],
            [
                "state_id"=> "30",
                "name"=> "کبودرآهنگ"
            ],
            [
                "state_id"=> "30",
                "name"=> "گل تپه"
            ],
            [
                "state_id"=> "30",
                "name"=> "ازندریان"
            ],
            [
                "state_id"=> "30",
                "name"=> "جوکار"
            ],
            [
                "state_id"=> "30",
                "name"=> "زنگنه"
            ],
            [
                "state_id"=> "30",
                "name"=> "سامن"
            ],
            [
                "state_id"=> "30",
                "name"=> "ملایر"
            ],
            [
                "state_id"=> "30",
                "name"=> "برزول"
            ],
            [
                "state_id"=> "30",
                "name"=> "فیروزان"
            ],
            [
                "state_id"=> "30",
                "name"=> "گیان"
            ],
            [
                "state_id"=> "30",
                "name"=> "نهاوند"
            ],
            [
                "state_id"=> "30",
                "name"=> "جورقان"
            ],
            [
                "state_id"=> "30",
                "name"=> "قهاوند"
            ],
            [
                "state_id"=> "30",
                "name"=> "مریانج"
            ],
            [
                "state_id"=> "30",
                "name"=> "همدان"
            ],
            [
                "state_id"=> "31",
                "name"=> "ابرکوه"
            ],
            [
                "state_id"=> "31",
                "name"=> "مهردشت"
            ],
            [
                "state_id"=> "31",
                "name"=> "احمدآباد"
            ],
            [
                "state_id"=> "31",
                "name"=> "اردکان"
            ],
            [
                "state_id"=> "31",
                "name"=> "عقدا"
            ],
            [
                "state_id"=> "31",
                "name"=> "اشکذر"
            ],
            [
                "state_id"=> "31",
                "name"=> "خضرآباد"
            ],
            [
                "state_id"=> "31",
                "name"=> "بافق"
            ],
            [
                "state_id"=> "31",
                "name"=> "بهاباد"
            ],
            [
                "state_id"=> "31",
                "name"=> "تفت"
            ],
            [
                "state_id"=> "31",
                "name"=> "نیر"
            ],
            [
                "state_id"=> "31",
                "name"=> "مروست"
            ],
            [
                "state_id"=> "31",
                "name"=> "هرات"
            ],
            [
                "state_id"=> "31",
                "name"=> "مهریز"
            ],
            [
                "state_id"=> "31",
                "name"=> "بفروییه"
            ],
            [
                "state_id"=> "31",
                "name"=> "میبد"
            ],
            [
                "state_id"=> "31",
                "name"=> "ندوشن"
            ],
            [
                "state_id"=> "31",
                "name"=> "حمیدیا"
            ],
            [
                "state_id"=> "31",
                "name"=> "زارچ"
            ],
            [
                "state_id"=> "31",
                "name"=> "شاهدیه"
            ],
            [
                "state_id"=> "31",
                "name"=> "یزد"
            ]
        ];

        DB::table('cities')->insert($cities);
    }
}
