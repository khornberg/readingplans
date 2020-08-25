<?php

class bibleplan {
    function getVersion() {
        return '1.0.2';
    }

    function getId() {
        return 'oneyearchronological';
    }

    function getAbbv() {
        return 'oyc';
    }

    function getName() {
        return 'One Year Chronological';
    }

    function getInfo() {
        $info = "One Year Chronological<br /><a target='_new' href='http://www.oneyearbibleonline.com'>www.oneyearbibleonline.com</a>";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Genesis 1:1-3:24',
            2 => 'Genesis 4:1-5:32;1Chronicles 1:1-4;Genesis 6:1-22',
            3 => 'Genesis 7:1-10:5;1Chronicles 1:5-7;Genesis 10:6-20;1Chronicles 1:8-16;Genesis 10:21-30;1Chronicles 1:17-23;Genesis 10:31-32',
            4 => 'Genesis 11:1-26;1Chronicles 1:24-27;Genesis 11:27-31;Genesis 12:1-14:24',
            5 => 'Genesis 15:1-17:27',
            6 => 'Genesis 18:1-21:7',
            7 => 'Genesis 21:8-23:20;Genesis 11:32;Genesis 24:1-67',
            8 => 'Genesis 25:1-4;1Chronicles 1:32-33;Genesis 25:5-6;Genesis 25:12-18;1Chronicles 1:28-31;1Chronicles 1:34;Genesis 25:19-26;Genesis 25:7-11',
            9 => 'Genesis 25:27-28:5',
            10 => 'Genesis 28:6-30:24',
            11 => 'Genesis 30:25-31:55',
            12 => 'Genesis 32:1-35:27',
            13 => 'Genesis 36:1-19;1Chronicles 1:35-37;Genesis 36:20-30;1Chronicles 1:38-42;Genesis 36:31-43;1Chronicles 1:43-2:2',
            14 => 'Genesis 37:1-38:30;1Chronicles 2:3-6;1Chronicles 2:8;Genesis 39:1-23',
            15 => 'Genesis 40:1-23;Genesis 35:28-29;Genesis 41:1-57',
            16 => 'Genesis 42:1-45:15',
            17 => 'Genesis 45:16-47:27',
            18 => 'Genesis 47:28-50:26',
            19 => 'Job 1:1-4:21',
            20 => 'Job 5:1-7:21',
            21 => 'Job 8:1-11:20',
            22 => 'Job 12:1-14:22',
            23 => 'Job 15:1-18:21',
            24 => 'Job 19:1-21:34',
            25 => 'Job 22:1-25:6',
            26 => 'Job 26:1-29:25',
            27 => 'Job 30:1-31:40',
            28 => 'Job 32:1-34:37',
            29 => 'Job 35:1-37:24',
            30 => 'Job 38:1-40:5',
            31 => 'Job 40:6-42:17',
            32 => 'Exodus 1:1-2:25;1Chronicles 6:1-3;Exodus 3:1-4:17',
            33 => 'Exodus 4:18-7:13',
            34 => 'Exodus 7:14-9:35',
            35 => 'Exodus 10:1-12:51',
            36 => 'Exodus 13:1-15:27',
            37 => 'Exodus 16:1-19:25',
            38 => 'Exodus 20:1-22:15',
            39 => 'Exodus 22:16-24:18',
            40 => 'Exodus 25:1-28:43',
            41 => 'Exodus 29:1-31:18',
            42 => 'Exodus 32:1-34:35',
            43 => 'Exodus 35:1-36:38',
            44 => 'Exodus 37:1-39:31',
            45 => 'Exodus 39:32-40:38;Numbers 9:15-23',
            46 => 'Numbers 7:1-89',
            47 => 'Numbers 8:1-9:14;Leviticus 1:1-3:17',
            48 => 'Leviticus 4:1-6:30',
            49 => 'Leviticus 7:1-8:36',
            50 => 'Leviticus 9:1-11:47',
            51 => 'Leviticus 12:1-14:32',
            52 => 'Leviticus 14:33-16:34',
            53 => 'Leviticus 17:1-19:37',
            54 => 'Leviticus 20:1-22:33',
            55 => 'Leviticus 23:1-25:23',
            56 => 'Leviticus 25:24-26:46',
            57 => 'Leviticus 27:1-34;Numbers 1:1-54',
            58 => 'Numbers 2:1-3:51',
            59 => 'Numbers 4:1-5:31',
            60 => 'Numbers 6:1-27;Numbers 10:1-36',
            61 => 'Numbers 11:1-13:33',
            62 => 'Numbers 14:1-15:41',
            63 => 'Numbers 16:1-18:32',
            64 => 'Numbers 19:1-21:35',
            65 => 'Numbers 22:1-24:25',
            66 => 'Numbers 25:1-26:65',
            67 => 'Numbers 27:1-29:40',
            68 => 'Numbers 30:1-31:54',
            69 => 'Numbers 32:1-33:56',
            70 => 'Numbers 34:1-36:13',
            71 => 'Deuteronomy 1:1-3:20',
            72 => 'Deuteronomy 3:21-5:33',
            73 => 'Deuteronomy 6:1-9:29',
            74 => 'Deuteronomy 10:1-12:32',
            75 => 'Deuteronomy 13:1-16:17',
            76 => 'Deuteronomy 16:18-21:9',
            77 => 'Deuteronomy 21:10-25:19',
            78 => 'Deuteronomy 26:1-29:1',
            79 => 'Deuteronomy 29:2-31:29',
            80 => 'Deuteronomy 31:30-32:52;Psalm 90',
            81 => 'Deuteronomy 33:1-34:12;Joshua 1:1-2:24',
            82 => 'Joshua 3:1-6:27',
            83 => 'Joshua 7:1;1Chronicles 2:7;Joshua 7:2-9:27',
            84 => 'Joshua 10:1-12:6',
            85 => 'Joshua 12:7-15:19',
            86 => 'Joshua 15:20-17:18',
            87 => 'Joshua 18:1-19:48',
            88 => 'Joshua 19:49-21:45;1Chronicles 6:54-81',
            89 => 'Joshua 22:1-24:33',
            90 => 'Judges 1:1-3:30',
            91 => 'Judges 3:31-6:40',
            92 => 'Judges 7:1-9:21',
            93 => 'Judges 9:22-11:28',
            94 => 'Judges 11:29-15:20',
            95 => 'Judges 16:1-18:31',
            96 => 'Judges 19:1-21:25',
            97 => 'Ruth 1:1-4:12',
            98 => 'Ruth 4:13-22;1Chronicles 2:9-55;1Chronicles 4:1-23;1Samuel 1:1-8',
            99 => '1Samuel 1:9-4:11',
            100 => '1Samuel 4:12-8:22',
            101 => '1Samuel 9:1-12:25',
            102 => '1Chronicles 9:35-39;1Samuel 13:1-5;1Samuel 13:19-23;1Samuel 13:6-18;1Samuel 14:1-52',
            103 => '1Samuel 15:1-17:31',
            104 => '1Samuel 17:32-19:17;Psalm 59;1Samuel 19:18-24',
            105 => '1Samuel 20:1-21:15;Psalm 34',
            106 => '1Samuel 22:1-2;Psalm 57;Psalm 142;1Chronicles 12:8-18;1Samuel 22:3-23;Psalm 52;1Samuel 23:1-12',
            107 => '1Samuel 23:13-29;Psalm 54;1Samuel 24:1-25:44',
            108 => '1Samuel 26:1-27:7;1Chronicles 12:1-7;1Samuel 27:8-29:11;1Chronicles 12:19;Psalm 56',
            109 => '1Samuel 30:1-31;1Chronicles 12:20-22;1Samuel 31:1-13;1Chronicles 10:1-14;1Chronicles 9:40-44;2Samuel 4:4;2Samuel 1:1-27',
            110 => '2Samuel 2:1-3:5;1Chronicles 3:1-4;2Samuel 23:8-17;1Chronicles 11:10-19;2Samuel 23:18-39;1Chronicles 11:20-47',
            111 => '2Samuel 3:6-4:3;2Samuel 4:5-4:12',
            112 => '2Samuel 5:1-3;1Chronicles 11:1-3;1Chronicles 12:23-40;2Samuel 5:17-25;1Chronicles 14:8-17;2Samuel 5:6-10;1Chronicles 11:4-9;1Chronicles 3:4;2Samuel 5:13;2Samuel 5:4-5;2Samuel 5:11-12;1Chronicles 14:1-2;1Chronicles 13:1-5;2Samuel 6:1-11;1Chronicles 13:6-14',
            113 => '2Samuel 6:12;1Chronicles 15:1-28;2Samuel 6:12-16;1Chronicles 15:29;2Samuel 6:17-19;1Chronicles 16:1-43;2Samuel 6:19-23',
            114 => '2Samuel 7:1-17;1Chronicles 17:1-15;2Samuel 7:18-29;1Chronicles 17:16-27;2Samuel 8:1-14;1Chronicles 18:1-13;Psalm 60',
            115 => '2Samuel 8:15-18;1Chronicles 18:14-17;1Chronicles 6:16-30;1Chronicles 6:50-53;1Chronicles 6:31-48;2Samuel 9:1-10:19;1Chronicles 19:1-19',
            116 => '1Chronicles 20:1;2Samuel 11:1-12:14;Psalm 51;2Samuel 12:15-25;2Samuel 5:14-16;1Chronicles 14:3-7;1Chronicles 3:5-9',
            117 => '2Samuel 12:26-31;1Chronicles 20:2-3;2Samuel 13:1-14:33',
            118 => '2Samuel 15:1-17:14',
            119 => '2Samuel 17:15-29;Psalm 3;Psalm 63;2Samuel 18:1-19:30',
            120 => '2Samuel 19:31-20:26;Psalm 7;2Samuel 21:1-22;1Chronicles 20:4-8',
            121 => '2Samuel 22:1-51;Psalm 18',
            122 => '2Samuel 24:1-9;1Chronicles 21:1-6;2Samuel 24:10-17;1Chronicles 21:7-17;2Samuel 24:18-25;1Chronicles 21:18-22:19',
            123 => '1Chronicles 23:1-25:31',
            124 => '1Chronicles 26:1-28:21',
            125 => '1Chronicles 29:1-22;1Kings 1:1-53',
            126 => '1Kings 2:1-9;2Samuel 23:1-7;1Kings 2:10-12;1Chronicles 29:26-30;Psalm 4-6;Psalm 8-9;Psalm 11',
            127 => 'Psalm 12-17;Psalm 19-21',
            128 => 'Psalm 22-26',
            129 => 'Psalm 27-32',
            130 => 'Psalm 35-38',
            131 => 'Psalm 39-41;Psalm 53;Psalm 55;Psalm 58',
            132 => 'Psalm 61-62;Psalm 64-67',
            133 => 'Psalm 68-70;Psalm 86;Psalm 101',
            134 => 'Psalm 103;Psalm 108-110;Psalm 122;Psalm 124',
            135 => 'Psalm 131;Psalm 133;Psalm 138-141;Psalm 143',
            136 => 'Psalm 144-145;Psalm 88-89',
            137 => 'Psalm 50;Psalm 73-74',
            138 => 'Psalm 75-78',
            139 => 'Psalm 79-82',
            140 => 'Psalm 83;1Chronicles 29:23-25;2Chronicles 1:1;1Kings 2:13-3:4;2Chronicles 1:2-6;1Kings 3:5-15;2Chronicles 1:7-13',
            141 => '1Kings 3:16-28;1Kings 5:1-18;2Chronicles 2:1-18;1Kings 6:1-13;2Chronicles 3:1-14;1Kings 6:14-38',
            142 => '1Kings 7:1-51;2Chronicles 3:15-4:22',
            143 => '1Kings 8:1-11;2Chronicles 5:1-14;1Kings 8:12-21;2Chronicles 6:1-11;1Kings 8:22-53;2Chronicles 6:12-42',
            144 => '1Kings 8:54-66;2Chronicles 7:1-10;1Kings 9:1-9;2Chronicles 7:11-22;1Kings 9:10-14',
            145 => '2Chronicles 8:1-18;1Kings 9:15-10:13;2Chronicles 9:1-12;1Kings 10:14-29;2Chronicles 9:13-28;2Chronicles 1:14-17',
            146 => '1Kings 4:1-34;Psalm 72;Psalm 127',
            147 => 'Proverbs 1:1-4:27',
            148 => 'Proverbs 5:1-7:27',
            149 => 'Proverbs 8:1-10:32',
            150 => 'Proverbs 11:1-13:25',
            151 => 'Proverbs 14:1-16:33',
            152 => 'Proverbs 17:1-19:29',
            153 => 'Proverbs 20:1-22:16',
            154 => 'Proverbs 22:17-24:34',
            155 => 'SongOfSongs 1:1-8:14',
            156 => '1Kings 11:1-43;2Chronicles 9:29-31;Ecclesiastes 1:1-11',
            157 => 'Ecclesiastes 1:12-6:12',
            158 => 'Ecclesiastes 7:1-11:6',
            159 => 'Ecclesiastes 11:7-12:14;1Kings 12:1-20;2Chronicles 10:1-19;1Kings 12:21-24;2Chronicles 11:1-4;1Kings 12:25-33;2Chronicles 11:5-17',
            160 => '1Kings 13:1-14:18;1Kings 14:21-14:24;2Chronicles 12:13-14;2Chronicles 11:18-23;2Chronicles 12:1-12;1Kings 14:25-28;2Chronicles 12:13-16;1Kings 14:29-15:5;2Chronicles 13:1-22;1Kings 15:6-8;2Chronicles 14:1-8;1Kings 15:9-15;1Kings 14:19-20;1Kings 15:25-34;2Chronicles 14:9-15',
            161 => '1Kings 15:16-22;2Chronicles 16:1-10;1Kings 16:1-34;1Kings 15:23-24;2Chronicles 16:11-17:19;1Kings 17:1-7',
            162 => '1Kings 17:8-20:22',
            163 => '1Kings 20:23-22:9;2Chronicles 18:1-8',
            164 => '1Kings 22:10-28;2Chronicles 18:9-27;1Kings 22:29-35;2Chronicles 18:28-34;1Kings 22:36-40;1Kings 22:51-53;2Chronicles 19:1-20:30',
            165 => '2Kings 1:1-18;2Kings 3:1-27;1Kings 22:41-49;2Chronicles 20:31-37;1Kings 22:50;2Chronicles 21:1-4;2Kings 8:16-22;2Chronicles 21:5-7',
            166 => '2Kings 2:1-25;2Kings 4:1-44',
            167 => '2Kings 5:1-8:15',
            168 => '2Chronicles 21:8-20;2Kings 8:23-29;2Chronicles 22:1-7;2Kings 9:1-10:17;2Chronicles 22:8-9;2Kings 10:18-31',
            169 => '2Kings 11:1-3;2Chronicles 22:10-12;2Kings 11:4-12;2Chronicles 23:1-11;2Kings 11:13-16;2Chronicles 23:12-15;2Kings 11:17-21;2Chronicles 23:16-21;2Kings 12:1-16;2Chronicles 24:1-22;2Kings 10:32-36',
            170 => '2Kings 13:1-11;2Kings 12:17-21;2Chronicles 24:23-27;2Kings 13:14-25',
            171 => '2Kings 14:1-14;2Chronicles 25:1-24;2Kings 13:12-13;2Kings 14:15-16;2Kings 14:23-27;2Chronicles 25:25-28;2Kings 14:17-22;2Kings 15:1-5;2Chronicles 26:1-21;JONAH 1:1-4:11',
            172 => 'Amos 1:1-6:14',
            173 => 'Amos 7:1-9:15;2Kings 14:28-29;2Kings 15:8-29;2Kings 15:6-7;2Chronicles 26:22-23;Isaiah 6:1-13',
            174 => '2Kings 15:32-38;2Chronicles 27:1-9;Micah 1:1-16;2Kings 16:1-9;2Chronicles 28:1-15;Isaiah 7:1-25',
            175 => 'Isaiah 8:1-11:16',
            176 => 'Isaiah 12:1-6;Isaiah 17:1-14;2Chronicles 28:16-21;2Kings 16:10-18;2Chronicles 28:22-25;2Kings 18:1-8;2Chronicles 29:1-2;2Kings 15:30-31;2Kings 17:1-4;Hosea 1:1-2:13',
            177 => 'Hosea 2:14-8:14',
            178 => 'Hosea 9:1-14:9',
            179 => 'Isaiah 28:1-29;2Kings 17:5;2Kings 18:9-12;2Kings 17:6-41;Isaiah 1:1-20',
            180 => 'Isaiah 1:21-5:30',
            181 => '2Kings 16:19-20;2Chronicles 28:26-27;Isaiah 13:1-16:14',
            182 => '2Chronicles 29:3-31:21',
            183 => 'Proverbs 25:1-29:27',
            184 => 'Proverbs 30:1-31:31',
            185 => 'Psalm 42;Psalm 43;Psalm 44;Psalm 45;Psalm 46',
            186 => 'Psalm 47;Psalm 48;Psalm 49;Psalm 84;Psalm 85;Psalm 87',
            187 => 'Psalm 1-2;Psalm 10;Psalm 33;Psalm 71;Psalm 91',
            188 => 'Psalm 92;Psalm 93;Psalm 94;Psalm 95;Psalm 96;Psalm 97',
            189 => 'Psalm 98;Psalm 99;Psalm 100;Psalm 102;Psalm 104',
            190 => 'Psalm 105;Psalm 106',
            191 => 'Psalm 107;Psalm 111;Psalm 112;Psalm 113;Psalm 114',
            192 => 'Psalm 115;Psalm 116;Psalm 117;Psalm 118',
            193 => 'Psalm 119',
            194 => 'Psalm 120;Psalm 121;Psalm 123;Psalm 125;Psalm 126',
            195 => 'Psalm 128;Psalm 129;Psalm 130;Psalm 132;Psalm 134;Psalm 135',
            196 => 'Psalm 136;Psalm 146;Psalm 147;Psalm 148;Psalm 149;Psalm 150',
            197 => 'Isaiah 18:1-23:18',
            198 => 'Isaiah 24:1-27:13;Isaiah 29:1-24',
            199 => 'Isaiah 30:1-33:24',
            200 => 'Isaiah 34:1-35:10;Micah 2:1-5:15',
            201 => 'Micah 6:1-7:20;2Chronicles 32:1-8;2Kings 18:13-18;Isaiah 36:1-3;2Kings 18:19-37;Isaiah 36:4-22',
            202 => '2Kings 19:1-19;Isaiah 37:1-20;2Chronicles 32:9-19;2Kings 19:20-37;Isaiah 37:21-38;2Chronicles 32:20-23',
            203 => '2Kings 20:1-11;Isaiah 38:1-8;2Chronicles 32:24-31;Isaiah 38:9-22;2Kings 20:12-19;Isaiah 39:1-8',
            204 => 'Isaiah 40:1-44:5',
            205 => 'Isaiah 44:6-48:11',
            206 => 'Isaiah 48:12-52:12',
            207 => 'Isaiah 52:13-57:21',
            208 => 'Isaiah 58:1-63:14',
            209 => 'Isaiah 63:15-66:24;2Kings 20:20-21;2Chronicles 32:32-33',
            210 => '2Kings 21:1-9;2Chronicles 33:1-9;2Kings 21:10-17;2Chronicles 33:10-19;2Kings 21:18;2Chronicles 33:20;2Kings 21:19-26;2Chronicles 33:21-25;2Kings 22:1-2;2Chronicles 34:1-7;Jeremiah 1:1-2:22',
            211 => 'Jeremiah 2:23-5:19',
            212 => 'Jeremiah 5:20-6:30;2Kings 22:3-20;2Chronicles 34:8-28',
            213 => '2Kings 23:1-20;2Chronicles 34:29-33;2Kings 23:21-28;2Chronicles 35:1-19;Nahum 1:1-3:19',
            214 => 'Habakkuk 1:1-3:19;Zephaniah 1:1-2:7',
            215 => 'Zephaniah 2:8-3:20;2Chronicles 35:20-27;2Kings 23:29-30;Jeremiah 47:1-48:47',
            216 => '2Chronicles 36:1-4;2Kings 23:31-37;2Chronicles 36:5;Jeremiah 22:1-23;Jeremiah 26:1-24;2Kings 24:1-4;Jeremiah 25:1-14',
            217 => 'Jeremiah 25:15-38;Jeremiah 36:1-32;Jeremiah 45:1-46:28',
            218 => 'Jeremiah 19:1-20:18;Daniel 1:1-21',
            219 => 'Daniel 2:1-3:30;Jeremiah 7:1-8:3',
            220 => 'Jeremiah 8:4-11:23',
            221 => 'Jeremiah 12:1-15:21',
            222 => 'Jeremiah 16:1-18:23;Jeremiah 35:1-19',
            223 => 'Jeremiah 49:1-33;2Kings 24:5-7;2Chronicles 36:6-8;2Kings 24:8-9;2Chronicles 36:9;Jeremiah 22:24-23:32',
            224 => 'Jeremiah 23:33-24:10;Jeremiah 29:1-31:14',
            225 => 'Jeremiah 31:15-40;Jeremiah 49:34-51:14',
            226 => 'Jeremiah 51:15-58;2Chronicles 36:10;2Kings 24:10-17;1Chronicles 3:10-16;2Chronicles 36:11-14;Jeremiah 52:1-3;2Kings 24:18-20;Jeremiah 37:1-10',
            227 => 'Jeremiah 37:11-38:28;Ezekiel 1:1-3:15',
            228 => 'Ezekiel 3:16-4:17;Jeremiah 27:1-28:17;Jeremiah 51:59-64',
            229 => 'Ezekiel 5:1-9:11',
            230 => 'Ezekiel 10:1-13:23',
            231 => 'Ezekiel 14:1-16:63',
            232 => 'Ezekiel 17:1-19:14',
            233 => 'Ezekiel 20:1-22:16',
            234 => 'Ezekiel 22:17-23:49;2Kings 24:20-25:2;Jeremiah 52:3-5;Jeremiah 39:1;Ezekiel 24:1-14',
            235 => 'Ezekiel 24:15-25:17;Jeremiah 34:1-22;Jeremiah 21:1-14;Ezekiel 29:1-16;Ezekiel 30:20-31:18',
            236 => 'Jeremiah 32:1-33:26;Ezekiel 26:1-14',
            237 => 'Ezekiel 26:15-28:26;2Kings 25:3-7;Jeremiah 52:6-11;Jeremiah 39:2-10',
            238 => 'Jeremiah 39:11-18;Jeremiah 40:1-6;2Kings 25:8-21;Jeremiah 52:12-27;2Chronicles 36:15-21;Lamentations 1:1-22',
            239 => 'Lamentations 2:1-4:22',
            240 => 'Lamentations 5:1-22;OBADIAH 1:1-21;2Kings 25:22-26;Jeremiah 40:7-41:18',
            241 => 'Jeremiah 42:1-44:30;Ezekiel 33:21-33',
            242 => 'Ezekiel 34:1-36:38',
            243 => 'Ezekiel 37:1-39:29;Ezekiel 32:1-16',
            244 => 'Ezekiel 32:17-33:20;Jeremiah 52:28-30;Psalm 137:1-9;1Chronicles 4:24-5:17',
            245 => '1Chronicles 5:18-26;1Chronicles 6:3;1Chronicles 6:49;1Chronicles 6:4-15;1Chronicles 7:1-8:28',
            246 => '1Chronicles 8:29-9:1;Daniel 4:1-37;Ezekiel 40:1-37',
            247 => 'Ezekiel 40:38-43:27',
            248 => 'Ezekiel 44:1-46:24',
            249 => 'Ezekiel 47:1-48:35;Ezekiel 29:17-30:19;2Kings 25:27-30;Jeremiah 52:31-34',
            250 => 'Daniel 7:1-8:27;Daniel 5:1-31',
            251 => 'Daniel 6:1-28;Daniel 9:1-27;2Chronicles 36:22-23;Ezra 1:1-11;1Chronicles 3:17-19',
            252 => 'Ezra 2:1-4:5;1Chronicles 3:19-24',
            253 => 'Daniel 10:1-12:13;Ezra 4:24-5:1;Haggai 1:1-15',
            254 => 'Haggai 2:1-9;Zechariah 1:1-6;Haggai 2:10-19;Ezra 5:2;Haggai 2:20-23;Zechariah 1:7-5:11',
            255 => 'Zechariah 6:1-15;Ezra 5:3-6:14;Zechariah 7:1-8:23',
            256 => 'Zechariah 9:1-14:21',
            257 => 'Ezra 6:14-22;Ezra 4:6;Esther 1:1-4:17',
            258 => 'Esther 5:1-10:3',
            259 => 'Ezra 4:7-23;Ezra 7:1-8:36',
            260 => 'Ezra 9:1-10:44;Nehemiah 1:1-2:20',
            261 => 'Nehemiah 3:1-7:3',
            262 => 'Nehemiah 7:4-8:12',
            263 => 'Nehemiah 8:13-10:39',
            264 => 'Nehemiah 11:1-12:26;1Chronicles 9:1-34',
            265 => 'Nehemiah 12:27-13:6;Nehemiah 5:14-19;Nehemiah 13:7-31;Malachi 1:1-2:9',
            266 => 'Malachi 2:10-4:6;JOEL 1:1-3:21',
            267 => 'Mark 1:1;Luke 1:1-4;John 1:1-18;Matthew 1:1-17;Luke 3:23-38;Luke 1:5-38',
            268 => 'Luke 1:39-80;Matthew 1:18-25;Luke 2:1-40',
            269 => 'Matthew 2:1-23;Luke 2:41-52;Mark 1:2-8;Matthew 3:1-12;Luke 3:1-18;Mark 1:9-11;Matthew 3:13-17;Luke 3:21-22',
            270 => 'Mark 1:12-13;Matthew 4:1-11;Luke 4:1-15;John 1:19-2:25',
            271 => 'John 3:1-4:45;Luke 3:19-20',
            272 => 'Mark 1:14-15;Matthew 4:12-17;Luke 3:23;John 4:46-54;Luke 4:16-30;Mark 1:16-20;Matthew 4:18-22;Mark 1:21-28;Luke 4:31-37;Mark 1:29-34;Matthew 8:14-17;Luke 4:38-41;Mark 1:35-39;Luke 4:42-44;Matthew 4:23-25',
            273 => 'Luke 5:1-11;Mark 1:40-45;Matthew 8:1-4;Luke 5:12-16;Mark 2:1-12;Matthew 9:1-8;Luke 5:17-26;Mark 2:13-17;Matthew 9:9-13;Luke 5:27-32;Mark 2:18-22;Matthew 9:14-17;Luke 5:33-39',
            274 => 'John 5:1-47;Mark 2:23-28;Matthew 12:1-8;Luke 6:1-5;Mark 3:1-6;Matthew 12:9-14;Luke 6:6-11;Matthew 12:15-21',
            275 => 'Mark 3:7-19;Luke 6:12-16;Matthew 5:1-12;Luke 6:17-26;Matthew 5:13-48;Luke 6:27-36;Matthew 6:1-4',
            276 => 'Matthew 6:5-7:6;Luke 6:37-42;Matthew 7:7-20;Luke 6:43-45;Matthew 7:21-29;Luke 6:46-49',
            277 => 'Matthew 8:5-13;Luke 7:1-17;Matthew 11:1-19;Luke 7:18-35;Matthew 11:20-30;Luke 7:36-50',
            278 => 'Luke 8:1-3;Mark 3:20-30;Matthew 12:22-45;Mark 3:31-35;Matthew 12:46-50;Luke 8:19-21;Mark 4:1-9;Matthew 13:1-9;Luke 8:4-8;Mark 4:10-20',
            279 => 'Matthew 13:10-23;Luke 8:9-18;Mark 4:21-29;Matthew 13:24-30;Mark 4:30-34;Matthew 13:31-52;Mark 4:35-41;Matthew 8:23-27;Luke 8:22-25',
            280 => 'Mark 5:1-20;Matthew 8:28-34;Luke 8:26-39;Mark 5:21-43;Matthew 9:18-26;Luke 8:40-56',
            281 => 'Matthew 9:27-34;Mark 6:1-6;Matthew 13:53-58;Matthew 9:35-38;Mark 6:7-13;Matthew 10:1-42;Luke 9:1-6',
            282 => 'Luke 9:7-9;Mark 6:14-29;Matthew 14:1-21;Mark 6:30-44;Luke 9:10-17;John 6:1-15;Mark 6:45-52;Matthew 14:22-33;John 6:16-21;Mark 6:53-56;Matthew 14:34-36',
            283 => 'John 6:22-71;Mark 7:1-23;Matthew 15:1-20',
            284 => 'Mark 7:24-30;Matthew 15:21-28;Mark 7:31-37;Matthew 15:29-31;Mark 8:1-10;Matthew 15:32-16:4;Mark 8:11-21;Matthew 16:5-12',
            285 => 'Mark 8:22-30;Matthew 16:13-20;Luke 9:18-20;Mark 8:31-9:1;Matthew 16:21-28;Luke 9:21-27;Mark 9:2-13;Matthew 17:1-13;Luke 9:28-36',
            286 => 'Mark 9:14-29;Matthew 17:14-21;Luke 9:37-43;Mark 9:30-32;Matthew 17:22-23;Luke 9:43-45;Matthew 17:24-27;Mark 9:33-37;Matthew 18:1-6;Luke 9:46-48;Mark 9:38-41;Luke 9:49-50;Mark 9:42-50;Matthew 18:7-35',
            287 => 'John 7:1-9;Luke 9:51-56;Matthew 8:18-22;Luke 9:57-62;John 7:10-8:20',
            288 => 'John 8:21-59;Luke 10:1-11:13',
            289 => 'Luke 11:14-12:34',
            290 => 'Luke 12:35-13:21;John 9:1-41',
            291 => 'John 10:1-42;Luke 13:22-14:24',
            292 => 'Luke 14:25-17:10;John 11:1-37',
            293 => 'John 11:38-57;Luke 17:11-18:8',
            294 => 'Luke 18:9-14;Mark 10:1-12;Matthew 19:1-12;Mark 10:13-16;Matthew 19:13-15;Luke 18:15-17;Mark 10:17-31;Matthew 19:16-30;Luke 18:18-30',
            295 => 'Matthew 20:1-16;Mark 10:32-34;Matthew 20:17-19;Luke 18:31-34;Mark 10:35-45;Matthew 20:20-34;Mark 10:46-52;Luke 18:35-19:27',
            296 => 'Mark 14:3-9;Matthew 26:6-13;John 12:1-11;Mark 11:1-11;Matthew 21:1-11;Luke 19:28-40;John 12:12-19;Luke 19:41-44;John 12:20-36',
            297 => 'John 12:37-50;Mark 11:12-14;Matthew 21:18-22;Mark 11:15-19;Matthew 21:12-17;Luke 19:45-48;Mark 11:20-33;Matthew 21:23-27;Luke 20:1-8',
            298 => 'Matthew 21:28-32;Mark 12:1-12;Matthew 21:33-46;Luke 20:9-19;Matthew 22:1-14;Mark 12:13-17;Matthew 22:15-22;Luke 20:20-26;Mark 12:18-27;Matthew 22:23-33;Luke 20:27-40',
            299 => 'Mark 12:28-34;Matthew 22:34-40;Mark 12:35-37;Matthew 22:41-46;Luke 20:41-44;Mark 12:38-40;Matthew 23:1-12;Luke 20:45-47;Matthew 23:13-39;Mark 12:41-44;Luke 21:1-4',
            300 => 'Mark 13:1-23;Matthew 24:1-25;Luke 21:5-24;Mark 13:24-31;Matthew 24:26-35;Luke 21:25-33',
            301 => 'Mark 13:32-37;Matthew 24:36-51;Luke 21:34-38;Matthew 25:1-46',
            302 => 'Mark 14:1-2;Matthew 26:1-5;Luke 22:1-2;Mark 14:10-11;Matthew 26:14-16;Luke 22:3-6;Mark 14:12-16;Matthew 26:17-19;Luke 22:7-13;John 13:1-17;Mark 14:17-26;Matthew 26:20-30;Luke 22:14-30;John 13:18-30',
            303 => 'John 13:31-38;Mark 14:27-31;Matthew 26:31-35;Luke 22:31-38;John 14:1-15:17',
            304 => 'John 15:18-17:26',
            305 => 'John 18:1-2;Mark 14:32-42;Matthew 26:36-46;Luke 22:39-46;Mark 14:43-52;Matthew 26:47-56;Luke 22:47-53;John 18:3-24',
            306 => 'Mark 14:53-65;Matthew 26:57-68;Mark 14:66-72;Matthew 26:69-75;Luke 22:54-65;John 18:25-27;Mark 15:1;Matthew 27:1-2;Luke 22:66-71;Matthew 27:3-10',
            307 => 'Mark 15:2-5;Matthew 27:11-14;Luke 23:1-12;John 18:28-40;Mark 15:6-15;Matthew 27:15-26;Luke 23:13-25;John 19:1-16;Mark 15:16-20;Matthew 27:27-31',
            308 => 'Mark 15:21-24;Matthew 27:32-34;Luke 23:26-31;John 19:17;Mark 15:25-32;Matthew 27:35-44;Luke 23:32-43;John 19:18-27;Mark 15:33-41;Matthew 27:45-56;Luke 23:44-49;John 19:28-37',
            309 => 'Mark 15:42-47;Matthew 27:57-61;Luke 23:50-56;John 19:38-42;Matthew 27:62-66;Mark 16:1-8;Matthew 28:1-7;Luke 24:1-12;Mark 16:9-13;John 20:1-18;Matthew 28:8-15',
            310 => 'Luke 24:13-43;Mark 16:12-13;John 20:19-23;Mark 16:14;John 20:24-21:25;Matthew 28:16-20;Mark 16:15-18;Luke 24:44-49',
            311 => 'Mark 16:19-20;Luke 24:50-53;Acts 1:1-2:47',
            312 => 'Acts 3:1-5:42',
            313 => 'Acts 6:1-8:1',
            314 => 'Acts 8:1-9:43',
            315 => 'Acts 10:1-12:5',
            316 => 'Acts 12:6-14:20',
            317 => 'Acts 14:21-28;Galatians 1:1-3:23',
            318 => 'Galatians 3:24-6:18;Acts 15:1-21',
            319 => 'Acts 15:22-17:15',
            320 => 'Acts 17:16-18:3;1Thessalonians 1:1-5:11',
            321 => '1Thessalonians 5:12-28;2Thessalonians 1:1-3:18;Acts 18:4-23',
            322 => 'Acts 18:24-19:20;1Corinthians 1:1-3:23',
            323 => '1Corinthians 4:1-7:40',
            324 => '1Corinthians 8:1-11:1',
            325 => '1Corinthians 11:2-13:13',
            326 => '1Corinthians 14:1-15:58',
            327 => '1Corinthians 16:1-24;Acts 19:21-20:6;Romans 1:1-32',
            328 => 'Romans 2:1-4:25',
            329 => 'Romans 5:1-8:17',
            330 => 'Romans 8:18-10:21',
            331 => 'Romans 11:1-14:23',
            332 => 'Romans 15:1-16:27;2Corinthians 1:1-2:4',
            333 => '2Corinthians 2:5-6:13',
            334 => '2Corinthians 6:14-10:18',
            335 => '2Corinthians 11:1-13:13;Acts 20:7-12',
            336 => 'Acts 20:13-21:36',
            337 => 'Acts 21:37-23:35',
            338 => 'Acts 24:1-26:32',
            339 => 'Acts 27:1-44',
            340 => 'Acts 28:1-31;Ephesians 1:1-2:22',
            341 => 'Ephesians 3:1-5:14',
            342 => 'Ephesians 5:15-6:24;Colossians 1:1-23',
            343 => 'Colossians 1:24-4:18',
            344 => 'Philemon 1:1-25;Philippians 1:1-2:11',
            345 => 'Philippians 2:12-4:23',
            346 => 'James 1:1-3:18',
            347 => 'James 4:1-5:20;1Timothy 1:1-2:15',
            348 => '1Timothy 3:1-6:10',
            349 => '1Timothy 6:11-21;Titus 1:1-3:15;2Timothy 1:1-18',
            350 => '2Timothy 2:1-4:18',
            351 => '2Timothy 4:19-22;Hebrews 1:1-4:13',
            352 => 'Hebrews 4:14-7:28',
            353 => 'Hebrews 8:1-10:39',
            354 => 'Hebrews 11:1-12:29',
            355 => 'Hebrews 13:1-25;1Peter 1:1-2:3',
            356 => '1Peter 2:4-5:11',
            357 => '1Peter 5:12-14;2Peter 1:1-3:18',
            358 => '1John 1:1-4:6',
            359 => '1John 4:7-5:21;2John 1:1-13;3John 1:1-15',
            360 => 'Jude 1:1-25;Revelation 1:1-2:29',
            361 => 'Revelation 3:1-6:17',
            362 => 'Revelation 7:1-10:11',
            363 => 'Revelation 11:1-14:20',
            364 => 'Revelation 15:1-18:24',
            365 => 'Revelation 19:1-22:21'
        );
        return $data;
    }
}
$bibleplan = new bibleplan();

/**
 * Prepares data for json by trimming it and removing any partial verse annotations
 * @param  array $day Bible references for a day
 * @return array      Pepared bible references
 */
function prepare($day) {
      $references = array();
      foreach (explode(";", $day) as $ref) {
            if (strpos($ref, ",") !== FALSE) {
                  foreach (explode(",", $ref) as $str) {
                        $references[] = trim(preg_replace('/[a-z]{1}(?=-|$)/', '', $str));
                  }
            } else {
                  $references[] = trim(preg_replace('/[a-z]{1}(?=-|$)/', '', $ref));
            }
      }
      return $references;
}
$plan = array();
$tmp_plan = array();
$tmp_plan2 = array();
foreach ($bibleplan->getData() as $day) {
   $d = prepare($day);
   $tmp_plan[] = $d;
   $tmp_plan2 = array_merge($tmp_plan2, $d);
}

$plan['data2'] = $tmp_plan;
$plan['data'] = $tmp_plan2;
$plan['id'] = $bibleplan->getId();
$plan['abbv'] = $bibleplan->getAbbv();
$plan['name'] = $bibleplan->getName();
$plan['info'] = $bibleplan->getInfo();

$plan_json = json_encode($plan);

file_put_contents($bibleplan->getId().'.json', $plan_json);
?>
