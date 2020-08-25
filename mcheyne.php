<?php

class bibleplan {
    function getVersion() {
        return '1.0.1';
    }

    function getId() {
        return 'mcheyne';
    }

    function getAbbv() {
        return 'm';
    }

    function getName() {
        return "M'Cheyne";
    }

    function getInfo() {
        $info = "M'Cheyne Reading Plan";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Genesis 1;Matthew 1;Ezra 1;Acts 1',
            2 => 'Genesis 2;Matthew 2;Ezra 2;Acts 2',
            3 => 'Genesis 3;Matthew 3;Ezra 3;Acts 3',
            4 => 'Genesis 4;Matthew 4;Ezra 4;Acts 4',
            5 => 'Genesis 5;Matthew 5;Ezra 5;Acts 5',
            6 => 'Genesis 6;Matthew 6;Ezra 6;Acts 6',
            7 => 'Genesis 7;Matthew 7;Ezra 7;Acts 7',
            8 => 'Genesis 8;Matthew 8;Ezra 8;Acts 8',
            9 => 'Genesis 9-10;Matthew 9;Ezra 9;Acts 9',
            10 => 'Genesis 11;Matthew 10;Ezra 10;Acts 10',
            11 => 'Genesis 12;Matthew 11;Nehemiah 1;Acts 11',
            12 => 'Genesis 13;Matthew 12;Nehemiah 2;Acts 12',
            13 => 'Genesis 14;Matthew 13;Nehemiah 3;Acts 13',
            14 => 'Genesis 15;Matthew 14;Nehemiah 4;Acts 14',
            15 => 'Genesis 16;Matthew 15;Nehemiah 5;Acts 15',
            16 => 'Genesis 17;Matthew 16;Nehemiah 6;Acts 16',
            17 => 'Genesis 18;Matthew 17;Nehemiah 7;Acts 17',
            18 => 'Genesis 19;Matthew 18;Nehemiah 8;Acts 18',
            19 => 'Genesis 20;Matthew 19;Nehemiah 9;Acts 19',
            20 => 'Genesis 21;Matthew 20;Nehemiah 10;Acts 20',
            21 => 'Genesis 22;Matthew 21;Nehemiah 11;Acts 21',
            22 => 'Genesis 23;Matthew 22;Nehemiah 12;Acts 22',
            23 => 'Genesis 24;Matthew 23;Nehemiah 13;Acts 23',
            24 => 'Genesis 25;Matthew 24;Esther 1;Acts 24',
            25 => 'Genesis 26;Matthew 25;Esther 2;Acts 25',
            26 => 'Genesis 27;Matthew 26;Esther 3;Acts 26',
            27 => 'Genesis 28;Matthew 27;Esther 4;Acts 27',
            28 => 'Genesis 29;Matthew 28;Esther 5;Acts 28',
            29 => 'Genesis 30;Mark 1;Esther 6;Romans 1',
            30 => 'Genesis 31;Mark 2;Esther 7;Romans 2',
            31 => 'Genesis 32;Mark 3;Esther 8;Romans 3',
            32 => 'Genesis 33;Mark 4;Esther 9-10;Romans 4',
            33 => 'Genesis 34;Mark 5;Job 1;Romans 5',
            34 => 'Genesis 35-36;Mark 6;Job 2;Romans 6',
            35 => 'Genesis 37;Mark 7;Job 3;Romans 7',
            36 => 'Genesis 38;Mark 8;Job 4;Romans 8',
            37 => 'Genesis 39;Mark 9;Job 5;Romans 9',
            38 => 'Genesis 40;Mark 10;Job 6;Romans 10',
            39 => 'Genesis 41;Mark 11;Job 7;Romans 11',
            40 => 'Genesis 42;Mark 12;Job 8;Romans 12',
            41 => 'Genesis 43;Mark 13;Job 9;Romans 13',
            42 => 'Genesis 44;Mark 14;Job 10;Romans 14',
            43 => 'Genesis 45;Mark 15;Job 11;Romans 15',
            44 => 'Genesis 46;Mark 16;Job 12;Romans 16',
            45 => 'Genesis 47;Luke 1:1-38;Job 13;1Corinthians 1',
            46 => 'Genesis 48;Luke 1:39-80;Job 14;1Corinthians 2',
            47 => 'Genesis 49;Luke 2;Job 15;1Corinthians 3',
            48 => 'Genesis 50;Luke 3;Job 16-17;1Corinthians 4',
            49 => 'Exodus 1;Luke 4;Job 18;1Corinthians 5',
            50 => 'Exodus 2;Luke 5;Job 19;1Corinthians 6',
            51 => 'Exodus 3;Luke 6;Job 20;1Corinthians 7',
            52 => 'Exodus 4;Luke 7;Job 21;1Corinthians 8',
            53 => 'Exodus 5;Luke 8;Job 22;1Corinthians 9',
            54 => 'Exodus 6;Luke 9;Job 23;1Corinthians 10',
            55 => 'Exodus 7;Luke 10;Job 24;1Corinthians 11',
            56 => 'Exodus 8;Luke 11;Job 25-26;1Corinthians 12',
            57 => 'Exodus 9;Luke 12;Job 27;1Corinthians 13',
            58 => 'Exodus 10;Luke 13;Job 28;1Corinthians 14',
            59 => 'Exodus 11;Luke 14;Job 29;1Corinthians 15',
            60 => 'Exodus 12;Luke 15;Job 30;1Corinthians 16',
            61 => 'Exodus 13;Luke 16;Job 31;2Corinthians 1',
            62 => 'Exodus 14;Luke 17;Job 32;2Corinthians 2',
            63 => 'Exodus 15;Luke 18;Job 33;2Corinthians 3',
            64 => 'Exodus 16;Luke 19;Job 34;2Corinthians 4',
            65 => 'Exodus 17;Luke 20;Job 35;2Corinthians 5',
            66 => 'Exodus 18;Luke 21;Job 36;2Corinthians 6',
            67 => 'Exodus 19;Luke 22;Job 37;2Corinthians 7',
            68 => 'Exodus 20;Luke 23;Job 38;2Corinthians 8',
            69 => 'Exodus 21;Luke 24;Job 39;2Corinthians 9',
            70 => 'Exodus 22;John 1;Job 40;2Corinthians 10',
            71 => 'Exodus 23;John 2;Job 41;2Corinthians 11',
            72 => 'Exodus 24;John 3;Job 42;2Corinthians 12',
            73 => 'Exodus 25;John 4;Proverbs 1;2Corinthians 13',
            74 => 'Exodus 26;John 5;Proverbs 2;Galatians 1',
            75 => 'Exodus 27;John 6;Proverbs 3;Galatians 2',
            76 => 'Exodus 28;John 7;Proverbs 4;Galatians 3',
            77 => 'Exodus 29;John 8;Proverbs 5;Galatians 4',
            78 => 'Exodus 30;John 9;Proverbs 6;Galatians 5',
            79 => 'Exodus 31;John 10;Proverbs 7;Galatians 6',
            80 => 'Exodus 32;John 11;Proverbs 8;Ephesians 1',
            81 => 'Exodus 33;John 12;Proverbs 9;Ephesians 2',
            82 => 'Exodus 34;John 13;Proverbs 10;Ephesians 3',
            83 => 'Exodus 35;John 14;Proverbs 11;Ephesians 4',
            84 => 'Exodus 36;John 15;Proverbs 12;Ephesians 5',
            85 => 'Exodus 37;John 16;Proverbs 13;Ephesians 6',
            86 => 'Exodus 38;John 17;Proverbs 14;Philippians 1',
            87 => 'Exodus 39;John 18;Proverbs 15;Philippians 2',
            88 => 'Exodus 40;John 19;Proverbs 16;Philippians 3',
            89 => 'Leviticus 1;John 20;Proverbs 17;Philippians 4',
            90 => 'Leviticus 2-3;John 21;Proverbs 18;Colossians 1',
            91 => 'Leviticus 4;Psalm 1-2;Proverbs 19;Colossians 2',
            92 => 'Leviticus 5;Psalm 3-4;Proverbs 20;Colossians 3',
            93 => 'Leviticus 6;Psalm 5-6;Proverbs 21;Colossians 4',
            94 => 'Leviticus 7;Psalm 7-8;Proverbs 22;1 Thes 1',
            95 => 'Leviticus 8;Psalm 9;Proverbs 23;1 Thes 2',
            96 => 'Leviticus 9;Psalm 10;Proverbs 24;1 Thes 3',
            97 => 'Leviticus 10;Psalm 11-12;Proverbs 25;1 Thes 4',
            98 => 'Leviticus 11-12;Psalm 13-14;Proverbs 26;1 Thes 5',
            99 => 'Leviticus 13;Psalm 15-16;Proverbs 27;2 Thes 1',
            100 => 'Leviticus 14;Psalm 17;Proverbs 28;2 Thes 2',
            101 => 'Leviticus 15;Psalm 18;Proverbs 29;2 Thes 3',
            102 => 'Leviticus 16;Psalm 19;Proverbs 30;1Timothy 1',
            103 => 'Leviticus 17;Psalm 20-21;Proverbs 31;1Timothy 2',
            104 => 'Leviticus 18;Psalm 22;Ecclesiastes 1;1Timothy 3',
            105 => 'Leviticus 19;Psalm 23-24;Ecclesiastes 2;1Timothy 4',
            106 => 'Leviticus 20;Psalm 25;Ecclesiastes 3;1Timothy 5',
            107 => 'Leviticus 21;Psalm 26-27;Ecclesiastes 4;1Timothy 6',
            108 => 'Leviticus 22;Psalm 28-29;Ecclesiastes 5;2Timothy 1',
            109 => 'Leviticus 23;Psalm 30;Ecclesiastes 6;2Timothy 2',
            110 => 'Leviticus 24;Psalm 31;Ecclesiastes 7;2Timothy 3',
            111 => 'Leviticus 25;Psalm 32;Ecclesiastes 8;2Timothy 4',
            112 => 'Leviticus 26;Psalm 33;Ecclesiastes 9;Titus 1',
            113 => 'Leviticus 27;Psalm 34;Ecclesiastes 10;Titus 2',
            114 => 'Numbers 1;Psalm 35;Ecclesiastes 11;Titus 3',
            115 => 'Numbers 2;Psalm 36;Ecclesiastes 12;Philemon 1',
            116 => 'Numbers 3;Psalm 37;SongOfSongs 1;Hebrews 1',
            117 => 'Numbers 4;Psalm 38;SongOfSongs 2;Hebrews 2',
            118 => 'Numbers 5;Psalm 39;SongOfSongs 3;Hebrews 3',
            119 => 'Numbers 6;Psalm 40-41;SongOfSongs 4;Hebrews 4',
            120 => 'Numbers 7;Psalm 42-43;SongOfSongs 5;Hebrews 5',
            121 => 'Numbers 8;Psalm 44;SongOfSongs 6;Hebrews 6',
            122 => 'Numbers 9;Psalm 45;SongOfSongs 7;Hebrews 7',
            123 => 'Numbers 10;Psalm 46-47;SongOfSongs 8;Hebrews 8',
            124 => 'Numbers 11;Psalm 48;Isaiah 1;Hebrews 9',
            125 => 'Numbers 12-13;Psalm 49;Isaiah 2;Hebrews 10',
            126 => 'Numbers 14;Psalm 50;Isaiah 3-4;Hebrews 11',
            127 => 'Numbers 15;Psalm 51;Isaiah 5;Hebrews 12',
            128 => 'Numbers 16;Psalm 52-54;Isaiah 6;Hebrews 13',
            129 => 'Numbers 17-18;Psalm 55;Isaiah 7;James 1',
            130 => 'Numbers 19;Psalm 56-57;Isaiah 8;James 2',
            131 => 'Numbers 20;Psalm 58-59;Isaiah 9;James 3',
            132 => 'Numbers 21;Psalm 60-61;Isaiah 10;James 4',
            133 => 'Numbers 22;Psalm 62-63;Isaiah 11-12;James 5',
            134 => 'Numbers 23;Psalm 64-65;Isaiah 13;1Peter 1',
            135 => 'Numbers 24;Psalm 66-67;Isaiah 14;1Peter 2',
            136 => 'Numbers 25;Psalm 68;Isaiah 15;1Peter 3',
            137 => 'Numbers 26;Psalm 69;Isaiah 16;1Peter 4',
            138 => 'Numbers 27;Psalm 70-71;Isaiah 17-18;1Peter 5',
            139 => 'Numbers 28;Psalm 72;Isaiah 19-20;2Peter 1',
            140 => 'Numbers 29;Psalm 73;Isaiah 21;2Peter 2',
            141 => 'Numbers 30;Psalm 74;Isaiah 22;2Peter 3',
            142 => 'Numbers 31;Psalm 75-76;Isaiah 23;1John 1',
            143 => 'Numbers 32;Psalm 77;Isaiah 24;1John 2',
            144 => 'Numbers 33;Psalm 78:1-39;Isaiah 25;1John 3',
            145 => 'Numbers 34;Psalm 78:40-72;Isaiah 26;1John 4',
            146 => 'Numbers 35;Psalm 79;Isaiah 27;1John 5',
            147 => 'Numbers 36;Psalm 80;Isaiah 28;2John 1',
            148 => 'Deuteronomy 1;Psalm 81-82;Isaiah 29;3John 1',
            149 => 'Deuteronomy 2;Psalm 83-84;Isaiah 30;Jude 1',
            150 => 'Deuteronomy 3;Psalm 85;Isaiah 31;Revelation 1',
            151 => 'Deuteronomy 4;Psalm 86-87;Isaiah 32;Revelation 2',
            152 => 'Deuteronomy 5;Psalm 88;Isaiah 33;Revelation 3',
            153 => 'Deuteronomy 6;Psalm 89;Isaiah 34;Revelation 4',
            154 => 'Deuteronomy 7;Psalm 90;Isaiah 35;Revelation 5',
            155 => 'Deuteronomy 8;Psalm 91;Isaiah 36;Revelation 6',
            156 => 'Deuteronomy 9;Psalm 92-93;Isaiah 37;Revelation 7',
            157 => 'Deuteronomy 10;Psalm 94;Isaiah 38;Revelation 8',
            158 => 'Deuteronomy 11;Psalm 95-96;Isaiah 39;Revelation 9',
            159 => 'Deuteronomy 12;Psalm 97-98;Isaiah 40;Revelation 10',
            160 => 'Deuteronomy 13-14;Psalm 99-101;Isaiah 41;Revelation 11',
            161 => 'Deuteronomy 15;Psalm 102;Isaiah 42;Revelation 12',
            162 => 'Deuteronomy 16;Psalm 103;Isaiah 43;Revelation 13',
            163 => 'Deuteronomy 17;Psalm 104;Isaiah 44;Revelation 14',
            164 => 'Deuteronomy 18;Psalm 105;Isaiah 45;Revelation 15',
            165 => 'Deuteronomy 19;Psalm 106;Isaiah 46;Revelation 16',
            166 => 'Deuteronomy 20;Psalm 107;Isaiah 47;Revelation 17',
            167 => 'Deuteronomy 21;Psalm 108-109;Isaiah 48;Revelation 18',
            168 => 'Deuteronomy 22;Psalm 110-111;Isaiah 49;Revelation 19',
            169 => 'Deuteronomy 23;Psalm 112-113;Isaiah 50;Revelation 20',
            170 => 'Deuteronomy 24;Psalm 114-115;Isaiah 51;Revelation 21',
            171 => 'Deuteronomy 25;Psalm 116;Isaiah 52;Revelation 22',
            172 => 'Deuteronomy 26;Psalm 117-118;Isaiah 53;Matthew 1',
            173 => 'Deuteronomy 27;Psalm 119:1-24;Isaiah 54;Matthew 2',
            174 => 'Deuteronomy 28;Psalm 119:25-48;Isaiah 55;Matthew 3',
            175 => 'Deuteronomy 29;Psalm 119:49-72;Isaiah 56;Matthew 4',
            176 => 'Deuteronomy 30;Psalm 119:73-96;Isaiah 57;Matthew 5',
            177 => 'Deuteronomy 31;Psalm 119:97-120;Isaiah 58;Matthew 6',
            178 => 'Deuteronomy 32;Psalm 119:121-144;Isaiah 59;Matthew 7',
            179 => 'Deuteronomy 33-34;Psalm 119:145-176;Isaiah 60;Matthew 8',
            180 => 'Joshua 1;Psalm 120-122;Isaiah 61;Matthew 9',
            181 => 'Joshua 2;Psalm 123-125;Isaiah 62;Matthew 10',
            182 => 'Joshua 3;Psalm 126-128;Isaiah 63;Matthew 11',
            183 => 'Joshua 4;Psalm 129-131;Isaiah 64;Matthew 12',
            184 => 'Joshua 5;Psalm 132-134;Isaiah 65;Matthew 13',
            185 => 'Joshua 6;Psalm 135-136;Isaiah 66;Matthew 14',
            186 => 'Joshua 7;Psalm 137-138;Jeremiah 1;Matthew 15',
            187 => 'Joshua 8;Psalm 139;Jeremiah 2;Matthew 16',
            188 => 'Joshua 9;Psalm 140-141;Jeremiah 3;Matthew 17',
            189 => 'Joshua 10;Psalm 142-143;Jeremiah 4;Matthew 18',
            190 => 'Joshua 11;Psalm 144;Jeremiah 5;Matthew 19',
            191 => 'Joshua 12-13;Psalm 145;Jeremiah 6;Matthew 20',
            192 => 'Joshua 14-15;Psalm 146-147;Jeremiah 7;Matthew 21',
            193 => 'Joshua 16-17;Psalm 148;Jeremiah 8;Matthew 22',
            194 => 'Joshua 18-19;Psalm 149-150;Jeremiah 9;Matthew 23',
            195 => 'Joshua 20-21;Acts 1;Jeremiah 10;Matthew 24',
            196 => 'Joshua 22;Acts 2;Jeremiah 11;Matthew 25',
            197 => 'Joshua 23;Acts 3;Jeremiah 12;Matthew 26',
            198 => 'Joshua 24;Acts 4;Jeremiah 13;Matthew 27',
            199 => 'Judges 1;Acts 5;Jeremiah 14;Matthew 28',
            200 => 'Judges 2;Acts 6;Jeremiah 15;Mark 1',
            201 => 'Judges 3;Acts 7;Jeremiah 16;Mark 2',
            202 => 'Judges 4;Acts 8;Jeremiah 17;Mark 3',
            203 => 'Judges 5;Acts 9;Jeremiah 18;Mark 4',
            204 => 'Judges 6;Acts 10;Jeremiah 19;Mark 5',
            205 => 'Judges 7;Acts 11;Jeremiah 20;Mark 6',
            206 => 'Judges 8;Acts 12;Jeremiah 21;Mark 7',
            207 => 'Judges 9;Acts 13;Jeremiah 22;Mark 8',
            208 => 'Judges 10;Acts 14;Jeremiah 23;Mark 9',
            209 => 'Judges 11;Acts 15;Jeremiah 24;Mark 10',
            210 => 'Judges 12;Acts 16;Jeremiah 25;Mark 11',
            211 => 'Judges 13;Acts 17;Jeremiah 26;Mark 12',
            212 => 'Judges 14;Acts 18;Jeremiah 27;Mark 13',
            213 => 'Judges 15;Acts 19;Jeremiah 28;Mark 14',
            214 => 'Judges 16;Acts 20;Jeremiah 29;Mark 15',
            215 => 'Judges 17;Acts 21;Jeremiah 30-31;Mark 16',
            216 => 'Judges 18;Acts 22;Jeremiah 32;Luke 1',
            217 => 'Judges 19;Acts 23;Jeremiah 33;Luke 2',
            218 => 'Judges 20;Acts 24;Jeremiah 34;Luke 3',
            219 => 'Judges 21;Acts 25;Jeremiah 35;Luke 4',
            220 => 'Ruth 1;Acts 26;Jeremiah 36;Luke 5',
            221 => 'Ruth 2;Acts 27;Jeremiah 37;Luke 6',
            222 => 'Ruth 3-4;Acts 28;Jeremiah 38;Luke 7',
            223 => '1Samuel 1;Romans 1;Jeremiah 39;Luke 8',
            224 => '1Samuel 2;Romans 2;Jeremiah 40;Luke 9',
            225 => '1Samuel 3;Romans 3;Jeremiah 41;Luke 10',
            226 => '1Samuel 4;Romans 4;Jeremiah 42;Luke 11',
            227 => '1Samuel 5-6;Romans 5;Jeremiah 43;Luke 12',
            228 => '1Samuel 7-8;Romans 6;Jeremiah 44-45;Luke 13',
            229 => '1Samuel 9;Romans 7;Jeremiah 46;Luke 14',
            230 => '1Samuel 10;Romans 8;Jeremiah 47;Luke 15',
            231 => '1Samuel 11;Romans 9;Jeremiah 48;Luke 16',
            232 => '1Samuel 12;Romans 10;Jeremiah 49;Luke 17',
            233 => '1Samuel 13;Romans 11;Jeremiah 50;Luke 18',
            234 => '1Samuel 14;Romans 12;Jeremiah 51;Luke 19',
            235 => '1Samuel 15;Romans 13;Jeremiah 52;Luke 20',
            236 => '1Samuel 16;Romans 14;Lamentations 1;Luke 21',
            237 => '1Samuel 17;Romans 15;Lamentations 2;Luke 22',
            238 => '1Samuel 18;Romans 16;Lamentations 3;Luke 23',
            239 => '1Samuel 19;1Corinthians 1;Lamentations 4;Luke 24',
            240 => '1Samuel 20;1Corinthians 2;Lamentations 5;John 1',
            241 => '1Samuel 21-22;1Corinthians 3;Ezekiel 1;John 2',
            242 => '1Samuel 23;1Corinthians 4;Ezekiel 2;John 3',
            243 => '1Samuel 24;1Corinthians 5;Ezekiel 3;John 4',
            244 => '1Samuel 25;1Corinthians 6;Ezekiel 4;John 5',
            245 => '1Samuel 26;1Corinthians 7;Ezekiel 5;John 6',
            246 => '1Samuel 27;1Corinthians 8;Ezekiel 6;John 7',
            247 => '1Samuel 28;1Corinthians 9;Ezekiel 7;John 8',
            248 => '1Samuel 29-30;1Corinthians 10;Ezekiel 8;John 9',
            249 => '1Samuel 31;1Corinthians 11;Ezekiel 9;John 10',
            250 => '2Samuel 1;1Corinthians 12;Ezekiel 10;John 11',
            251 => '2Samuel 2;1Corinthians 13;Ezekiel 11;John 12',
            252 => '2Samuel 3;1Corinthians 14;Ezekiel 12;John 13',
            253 => '2Samuel 4-5;1Corinthians 15;Ezekiel 13;John 14',
            254 => '2Samuel 6;1Corinthians 16;Ezekiel 14;John 15',
            255 => '2Samuel 7;2Corinthians 1;Ezekiel 15;John 16',
            256 => '2Samuel 8-9;2Corinthians 2;Ezekiel 16;John 17',
            257 => '2Samuel 10;2Corinthians 3;Ezekiel 17;John 18',
            258 => '2Samuel 11;2Corinthians 4;Ezekiel 18;John 19',
            259 => '2Samuel 12;2Corinthians 5;Ezekiel 19;John 20',
            260 => '2Samuel 13;2Corinthians 6;Ezekiel 20;John 21',
            261 => '2Samuel 14;2Corinthians 7;Ezekiel 21;Psalm 1-2',
            262 => '2Samuel 15;2Corinthians 8;Ezekiel 22;Psalm 3-4',
            263 => '2Samuel 16;2Corinthians 9;Ezekiel 23;Psalm 5-6',
            264 => '2Samuel 17;2Corinthians 10;Ezekiel 24;Psalm 7-8',
            265 => '2Samuel 18;2Corinthians 11;Ezekiel 25;Psalm 9',
            266 => '2Samuel 19;2Corinthians 12;Ezekiel 26;Psalm 10',
            267 => '2Samuel 20;2Corinthians 13;Ezekiel 27;Psalm 11-12',
            268 => '2Samuel 21;Galatians 1;Ezekiel 28;Psalm 13-14',
            269 => '2Samuel 22;Galatians 2;Ezekiel 29;Psalm 15-16',
            270 => '2Samuel 23;Galatians 3;Ezekiel 30;Psalm 17',
            271 => '2Samuel 24;Galatians 4;Ezekiel 31;Psalm 18',
            272 => '1Kings 1;Galatians 5;Ezekiel 32;Psalm 19',
            273 => '1Kings 2;Galatians 6;Ezekiel 33;Psalm 20-21',
            274 => '1Kings 3;Ephesians 1;Ezekiel 34;Psalm 22',
            275 => '1Kings 4-5;Ephesians 2;Ezekiel 35;Psalm 23-24',
            276 => '1Kings 6;Ephesians 3;Ezekiel 36;Psalm 25',
            277 => '1Kings 7;Ephesians 4;Ezekiel 37;Psalm 26-27',
            278 => '1Kings 8;Ephesians 5;Ezekiel 38;Psalm 28-29',
            279 => '1Kings 9;Ephesians 6;Ezekiel 39;Psalm 30',
            280 => '1Kings 10;Philippians 1;Ezekiel 40;Psalm 31',
            281 => '1Kings 11;Philippians 2;Ezekiel 41;Psalm 32',
            282 => '1Kings 12;Philippians 3;Ezekiel 42;Psalm 33',
            283 => '1Kings 13;Philippians 4;Ezekiel 43;Psalm 34',
            284 => '1Kings 14;Colossians 1;Ezekiel 44;Psalm 35',
            285 => '1Kings 15;Colossians 2;Ezekiel 45;Psalm 36',
            286 => '1Kings 16;Colossians 3;Ezekiel 46;Psalm 37',
            287 => '1Kings 17;Colossians 4;Ezekiel 47;Psalm 38',
            288 => '1Kings 18;1 Thes 1;Ezekiel 48;Psalm 39',
            289 => '1Kings 19;1 Thes 2;Daniel 1;Psalm 40-41',
            290 => '1Kings 20;1 Thes 3;Daniel 2;Psalm 42-43',
            291 => '1Kings 21;1 Thes 4;Daniel 3;Psalm 44',
            292 => '1Kings 22;1 Thes 5;Daniel 4;Psalm 45',
            293 => '2Kings 1;2 Thes 1;Daniel 5;Psalm 46-47',
            294 => '2Kings 2;2 Thes 2;Daniel 6;Psalm 48',
            295 => '2Kings 3;2 Thes 3;Daniel 7;Psalm 49',
            296 => '2Kings 4;1Timothy 1;Daniel 8;Psalm 50',
            297 => '2Kings 5;1Timothy 2;Daniel 9;Psalm 51',
            298 => '2Kings 6;1Timothy 3;Daniel 10;Psalm 52-54',
            299 => '2Kings 7;1Timothy 4;Daniel 11;Psalm 55',
            300 => '2Kings 8;1Timothy 5;Daniel 12;Psalm 56-57',
            301 => '2Kings 9;1Timothy 6;Hosea 1;Psalm 58-59',
            302 => '2Kings 10-11;2Timothy 1;Hosea 2;Psalm 60-61',
            303 => '2Kings 12;2Timothy 2;Hosea 3-4;Psalm 62-63',
            304 => '2Kings 13;2Timothy 3;Hosea 5-6;Psalm 64-65',
            305 => '2Kings 14;2Timothy 4;Hosea 7;Psalm 66-67',
            306 => '2Kings 15;Titus 1;Hosea 8;Psalm 68',
            307 => '2Kings 16;Titus 2;Hosea 9;Psalm 69',
            308 => '2Kings 17;Titus 3;Hosea 10;Psalm 70-71',
            309 => '2Kings 18;Philemon 1;Hosea 11;Psalm 72',
            310 => '2Kings 19;Hebrews 1;Hosea 12;Psalm 73',
            311 => '2Kings 20;Hebrews 2;Hosea 13;Psalm 74',
            312 => '2Kings 21;Hebrews 3;Hosea 14;Psalm 75-76',
            313 => '2Kings 22;Hebrews 4;Joel 1;Psalm 77',
            314 => '2Kings 23;Hebrews 5;Joel 2;Psalm 78',
            315 => '2Kings 24;Hebrews 6;Joel 3;Psalm 79',
            316 => '2Kings 25;Hebrews 7;Amos 1;Psalm 80',
            317 => '1Chronicles 1-2;Hebrews 8;Amos 2;Psalm 81-82',
            318 => '1Chronicles 3-4;Hebrews 9;Amos 3;Psalm 83-84',
            319 => '1Chronicles 5-6;Hebrews 10;Amos 4;Psalm 85',
            320 => '1Chronicles 7-8;Hebrews 11;Amos 5;Psalm 86',
            321 => '1Chronicles 9-10;Hebrews 12;Amos 6;Psalm 87-88',
            322 => '1Chronicles 11-12;Hebrews 13;Amos 7;Psalm 89',
            323 => '1Chronicles 13-14;James 1;Amos 8;Psalm 90',
            324 => '1Chronicles 15;James 2;Amos 9;Psalm 91',
            325 => '1Chronicles 16;James 3;Obadiah 1;Psalm 92-93',
            326 => '1Chronicles 17;James 4;Jonah 1;Psalm 94',
            327 => '1Chronicles 18;James 5;Jonah 2;Psalm 95-96',
            328 => '1Chronicles 19-20;1Peter 1;Jonah 3;Psalm 97-98',
            329 => '1Chronicles 21;1Peter 2;Jonah 4;Psalm 99-101',
            330 => '1Chronicles 22;1Peter 3;Micah 1;Psalm 102',
            331 => '1Chronicles 23;1Peter 4;Micah 2;Psalm 103',
            332 => '1Chronicles 24-25;1Peter 5;Micah 3;Psalm 104',
            333 => '1Chronicles 26-27;2Peter 1;Micah 4;Psalm 105',
            334 => '1Chronicles 28;2Peter 2;Micah 5;Psalm 106',
            335 => '1Chronicles 29;2Peter 3;Micah 6;Psalm 107',
            336 => '2Chronicles 1;1John 1;Micah 7;Psalm 108-109',
            337 => '2Chronicles 2;1John 2;Nahum 1;Psalm 110-111',
            338 => '2Chronicles 3-4;1John 3;Nahum 2;Psalm 112-113',
            339 => '2Chronicles 5;1John 4;Nahum 3;Psalm 114-115',
            340 => '2Chronicles 6;1John 5;Habakkuk 1;Psalm 116',
            341 => '2Chronicles 7;2John 1;Habakkuk 2;Psalm 117-118',
            342 => '2Chronicles 8;3John 1;Habakkuk 3;Psalm 119:1-24',
            343 => '2Chronicles 9;Jude 1;Zephaniah 1;Psalm 119:25-48',
            344 => '2Chronicles 10;Revelation 1;Zephaniah 2;Psalm 119:49-72',
            345 => '2Chronicles 11-12;Revelation 2;Zephaniah 3;Psalm 119:73-96',
            346 => '2Chronicles 13;Revelation 3;Haggai 1;Psalm 119:97-120',
            347 => '2Chronicles 14-15;Revelation 4;Haggai 2;Psalm 119:121-144',
            348 => '2Chronicles 16;Revelation 5;Zechariah 1;Psalm 119:145-176',
            349 => '2Chronicles 17;Revelation 6;Zechariah 2;Psalm 120-122',
            350 => '2Chronicles 18;Revelation 7;Zechariah 3;Psalm 123-125',
            351 => '2Chronicles 19-20;Revelation 8;Zechariah 4;Psalm 126-128',
            352 => '2Chronicles 21;Revelation 9;Zechariah 5;Psalm 129-131',
            353 => '2Chronicles 22-23;Revelation 10;Zechariah 6;Psalm 132-134',
            354 => '2Chronicles 24;Revelation 11;Zechariah 7;Psalm 135-136',
            355 => '2Chronicles 25;Revelation 12;Zechariah 8;Psalm 137-138',
            356 => '2Chronicles 26;Revelation 13;Zechariah 9;Psalm 139',
            357 => '2Chronicles 27-28;Revelation 14;Zechariah 10;Psalm 140-141',
            358 => '2Chronicles 29;Revelation 15;Zechariah 11;Psalm 142',
            359 => '2Chronicles 30;Revelation 16;Zechariah 12;Psalm 143',
            360 => '2Chronicles 31;Revelation 17;Zechariah 13;Psalm 144',
            361 => '2Chronicles 32;Revelation 18;Zechariah 14;Psalm 145',
            362 => '2Chronicles 33;Revelation 19;Malachi 1;Psalm 146-147',
            363 => '2Chronicles 34;Revelation 20;Malachi 2;Psalm 148',
            364 => '2Chronicles 35;Revelation 21;Malachi 3;Psalm 149',
            365 => '2Chronicles 36;Revelation 22;Malachi 4;Psalm 150'
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
