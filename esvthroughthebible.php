<?php

class bibleplan {
    function getVersion() {
        return '1.0.2';
    }

    function getId() {
        return 'esvthroughthebible';
    }

    function getAbbv() {
        return 'etb';
    }

    function getName() {
        return 'Through The Bible';
    }

    function getInfo() {
        $info = "Through the Bible<br /><a target='_new' href='http://www.esv.org/biblereadingplans'>www.esv.org</a>";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Genesis 1-2;Matthew 1',
            2 => 'Genesis 3-5;Matthew 2',
            3 => 'Genesis 6-8;Matthew 3',
            4 => 'Genesis 9-11;Matthew 4',
            5 => 'Genesis 12-14;Matthew 5:1-26',
            6 => 'Genesis 15-17;Matthew 5:27-48',
            7 => 'Genesis 18-19;Matthew 6',
            8 => 'Genesis 20-22;Matthew 7',
            9 => 'Genesis 23-24;Matthew 8',
            10 => 'Genesis 25-26;Matthew 9:1-17',
            11 => 'Genesis 27-28;Matthew 9:18-38',
            12 => 'Genesis 29-30;Matthew 10:1-23',
            13 => 'Genesis 31-32;Matthew 10:24-42',
            14 => 'Genesis 33-35;Matthew 11',
            15 => 'Genesis 36-37;Matthew 12:1-21',
            16 => 'Genesis 38-40;Matthew 12:22-50',
            17 => 'Genesis 41;Matthew 13:1-32',
            18 => 'Genesis 42-43;Matthew 13:33-58',
            19 => 'Genesis 44-45;Matthew 14:1-21',
            20 => 'Genesis 46-48;Matthew 14:22-36',
            21 => 'Genesis 49-50;Matthew 15:1-20',
            22 => 'Exodus 1-3;Matthew 15:21-39',
            23 => 'Exodus 4-6;Matthew 16',
            24 => 'Exodus 7-8;Matthew 17',
            25 => 'Exodus 9-10;Matthew 18:1-20',
            26 => 'Exodus 11-12;Matthew 18:21-35',
            27 => 'Exodus 13-15;Matthew 19:1-15',
            28 => 'Exodus 16-18;Matthew 19:16-30',
            29 => 'Exodus 19-21;Matthew 20:1-16',
            30 => 'Exodus 22-24;Matthew 20:17-34',
            31 => 'Exodus 25-26;Matthew 21:1-22',
            32 => 'Exodus 27-28;Matthew 21:23-46',
            33 => 'Exodus 29-30;Matthew 22:1-22',
            34 => 'Exodus 31-33;Matthew 22:23-46',
            35 => 'Exodus 34-36;Matthew 23:1-22',
            36 => 'Exodus 37-38;Matthew 23:23-39',
            37 => 'Exodus 39-40;Matthew 24:1-22',
            38 => 'Leviticus 1-3;Matthew 24:23-51',
            39 => 'Leviticus 4-6;Matthew 25:1-30',
            40 => 'Leviticus 7-9;Matthew 25:31-46',
            41 => 'Leviticus 10-12;Matthew 26:1-19',
            42 => 'Leviticus 13;Matthew 26:20-54',
            43 => 'Leviticus 14;Matthew 26:55-75',
            44 => 'Leviticus 15-17;Matthew 27:1-31',
            45 => 'Leviticus 18-19;Matthew 27:32-66',
            46 => 'Leviticus 20-21;Matthew 28:1-20',
            47 => 'Leviticus 22-23;Mark 1:1-22',
            48 => 'Leviticus 24-25;Mark 1:23-45',
            49 => 'Leviticus 26-27;Mark 2',
            50 => 'Numbers 1-2;Mark 3:1-21',
            51 => 'Numbers 3-4;Mark 3:22-35',
            52 => 'Numbers 5-6;Mark 4:1-20',
            53 => 'Numbers 7;Mark 4:21-41',
            54 => 'Numbers 8-10;Mark 5:1-20',
            55 => 'Numbers 11-13;Mark 5:21-43',
            56 => 'Numbers 14-15;Mark 6:1-32',
            57 => 'Numbers 16-17;Mark 6:33-56',
            58 => 'Numbers 18-20;Mark 7:1-13',
            59 => 'Numbers 21-23;Mark 7:14-8:10',
            60 => 'Numbers 24-27;Mark 8:11-38',
            61 => 'Numbers 28-29;Mark 9:1-29',
            62 => 'Numbers 30-31;Mark 9:30-50',
            63 => 'Numbers 32-33;Mark 10:1-31',
            64 => 'Numbers 34-36;Mark 10:32-52',
            65 => 'Deuteronomy 1-2;Mark 11:1-19',
            66 => 'Deuteronomy 3-4;Mark 11:20-33',
            67 => 'Deuteronomy 5-7;Mark 12:1-27',
            68 => 'Deuteronomy 8-10;Mark 12:28-44',
            69 => 'Deuteronomy 11-13;Mark 13:1-13',
            70 => 'Deuteronomy 14-16;Mark 13:14-37',
            71 => 'Deuteronomy 17-19;Mark 14:1-25',
            72 => 'Deuteronomy 20-22;Mark 14:26-50',
            73 => 'Deuteronomy 23-25;Mark 14:51-72',
            74 => 'Deuteronomy 26-27;Mark 15:1-26',
            75 => 'Deuteronomy 28;Mark 15:27-47',
            76 => 'Deuteronomy 29-30;Mark 16',
            77 => 'Deuteronomy 31-32;Luke 1:1-23',
            78 => 'Deuteronomy 33-34;Luke 1:24-56',
            79 => 'Joshua 1-3;Luke 1:57-80',
            80 => 'Joshua 4-6;Luke 2:1-24',
            81 => 'Joshua 7-8;Luke 2:25-52',
            82 => 'Joshua 9-10;Luke 3',
            83 => 'Joshua 11-13;Luke 4:1-32',
            84 => 'Joshua 14-15;Luke 4:33-44',
            85 => 'Joshua 16-18;Luke 5:1-16',
            86 => 'Joshua 19-20;Luke 5:17-39',
            87 => 'Joshua 21-22;Luke 6:1-26',
            88 => 'Joshua 23-24;Luke 6:27-49',
            89 => 'Judges 1-2;Luke 7:1-30',
            90 => 'Judges 3-5;Luke 7:31-50',
            91 => 'Judges 6-7;Luke 8:1-21',
            92 => 'Judges 8-9;Luke 8:22-56',
            93 => 'Judges 10-11;Luke 9:1-36',
            94 => 'Judges 12-14;Luke 9:37-62',
            95 => 'Judges 15-17;Luke 10:1-24',
            96 => 'Judges 18-19;Luke 10:25-42',
            97 => 'Judges 20-21;Luke 11:1-28',
            98 => 'Ruth 1-4;Luke 11:29-54',
            99 => '1Samuel 1-3;Luke 12:1-34',
            100 => '1Samuel 4-6;Luke 12:35-59',
            101 => '1Samuel 7-9;Luke 13:1-21',
            102 => '1Samuel 10-12;Luke 13:22-35',
            103 => '1Samuel 13-14;Luke 14:12-24',
            104 => '1Samuel 15-16;Luke 14:25-35',
            105 => '1Samuel 17-18;Luke 15:1-10',
            106 => '1Samuel 19-21;Luke 15:11-32',
            107 => '1Samuel 22-24;Luke 16:1-18',
            108 => '1Samuel 25-26;Luke 16:19-31',
            109 => '1Samuel 27-29;Luke 17:1-19',
            110 => '1Samuel 30-31;Luke 17:20-37',
            111 => '2Samuel 1-3;Luke 18:1-17',
            112 => '2Samuel 4-6;Luke 18:18-43',
            113 => '2Samuel 7-9;Luke 19:1-28',
            114 => '2Samuel 10-12;Luke 19:29-48',
            115 => '2Samuel 13-14;Luke 20:1-26',
            116 => '2Samuel 15-16;Luke 20:27-47',
            117 => '2Samuel 17-18;Luke 21:1-19',
            118 => '2Samuel 19-20;Luke 21:20-38',
            119 => '2Samuel 21-22;Luke 22:1-30',
            120 => '2Samuel 23-24;Luke 22:31-53',
            121 => '1Kings 1-2;Luke 22:54-71',
            122 => '1Kings 3-5;Luke 23:1-26',
            123 => '1Kings 6-7;Luke 23:27-38',
            124 => '1Kings 8-9;Luke 23:39-56',
            125 => '1Kings 10-11;Luke 24:1-35',
            126 => '1Kings 12-13;Luke 24:36-53',
            127 => '1Kings 14-15;John 1:1-28',
            128 => '1Kings 16-18;John 1:29-51',
            129 => '1Kings 19-20;John 2',
            130 => '1Kings 21-22;John 3:1-21',
            131 => '2Kings 1-3;John 3:22-36',
            132 => '2Kings 4-5;John 4:1-30',
            133 => '2Kings 6-8;John 4:31-54',
            134 => '2Kings 9-11;John 5:1-24',
            135 => '2Kings 12-14;John 5:25-47',
            136 => '2Kings 15-17;John 6:1-21',
            137 => '2Kings 18-19;John 6:22-44',
            138 => '2Kings 20-22;John 6:45-71',
            139 => '2Kings 23-25;John 7:1-31',
            140 => '1Chronicles 1-2;John 7:32-53',
            141 => '1Chronicles 3-5;John 8:1-20',
            142 => '1Chronicles 6-7;John 8:21-36',
            143 => '1Chronicles 8-10;John 8:37-59',
            144 => '1Chronicles 11-13;John 9:1-23',
            145 => '1Chronicles 14-16;John 9:24-41',
            146 => '1Chronicles 17-19;John 10:1-21',
            147 => '1Chronicles 20-22;John 10:22-42',
            148 => '1Chronicles 23-25;John 11:1-17',
            149 => '1Chronicles 26-27;John 11:18-46',
            150 => '1Chronicles 28-29;John 11:47-57',
            151 => '2Chronicles 1-3;John 12:1-19',
            152 => '2Chronicles 4-6;John 12:20-50',
            153 => '2Chronicles 7-9;John 13:1-17',
            154 => '2Chronicles 10-12;John 13:18-38',
            155 => '2Chronicles 13-16;John 14',
            156 => '2Chronicles 17-19;John 15',
            157 => '2Chronicles 20-22;John 16:1-15',
            158 => '2Chronicles 23-25;John 16:16-33',
            159 => '2Chronicles 26-28;John 17',
            160 => '2Chronicles 29-31;John 18:1-23',
            161 => '2Chronicles 32-33;John 18:24-40',
            162 => '2Chronicles 34-36;John 19:1-22',
            163 => 'Ezra 1-2;John 19:23-42',
            164 => 'Ezra 3-5;John 20',
            165 => 'Ezra 6-8;John 21',
            166 => 'Ezra 9-10;Acts 1',
            167 => 'Nehemiah 1-3;Acts 2:1-13',
            168 => 'Nehemiah 4-6;Acts 2:14-47',
            169 => 'Nehemiah 7-8;Acts 3',
            170 => 'Nehemiah 9-11;Acts 4:1-22',
            171 => 'Nehemiah 12-13;Acts 4:23-37',
            172 => 'Esther 1-3;Acts 5:1-16',
            173 => 'Esther 4-6;Acts 5:17-42',
            174 => 'Esther 7-10;Acts 6',
            175 => 'Job 1-3;Acts 7:1-19',
            176 => 'Job 4-6;Acts 7:20-43',
            177 => 'Job 7-9;Acts 7:44-60',
            178 => 'Job 10-12;Acts 8:1-25',
            179 => 'Job 13-15;Acts 8:26-40',
            180 => 'Job 16-18;Acts 9:1-22',
            181 => 'Job 19-20;Acts 9:23-43',
            182 => 'Job 21-22;Acts 10:1-23',
            183 => 'Job 23-25;Acts 10:24-48',
            184 => 'Job 26-28;Acts 11',
            185 => 'Job 29-30;Acts 12',
            186 => 'Job 31-32;Acts 13:1-23',
            187 => 'Job 33-34;Acts 13:24-52',
            188 => 'Job 35-37;Acts 14',
            189 => 'Job 38-39;Acts 15:1-21',
            190 => 'Job 40-42;Acts 15:22-41',
            191 => 'Psalm 1-3;Acts 16:1-15',
            192 => 'Psalm 4-6;Acts 16:16-40',
            193 => 'Psalm 7-9;Acts 17:1-15',
            194 => 'Psalm 10-12;Acts 17:16-34',
            195 => 'Psalm 13-16;Acts 18',
            196 => 'Psalm 17-18;Acts 19:1-20',
            197 => 'Psalm 19-21;Acts 19:21-41',
            198 => 'Psalm 22-24;Acts 20:1-16',
            199 => 'Psalm 25-27;Acts 20:17-38',
            200 => 'Psalm 28-30;Acts 21:1-14',
            201 => 'Psalm 31-33;Acts 21:15-40',
            202 => 'Psalm 34-35;Acts 22',
            203 => 'Psalm 36-37;Acts 23:1-11',
            204 => 'Psalm 38-40;Acts 23:12-35',
            205 => 'Psalm 41-43;Acts 24',
            206 => 'Psalm 44-46;Acts 25',
            207 => 'Psalm 47-49;Acts 26',
            208 => 'Psalm 50-52;Acts 27:1-25',
            209 => 'Psalm 53-55;Acts 27:26-44',
            210 => 'Psalm 56-58;Acts 28:1-15',
            211 => 'Psalm 59-61;Acts 28:16-31',
            212 => 'Psalm 62-64;Romans 1',
            213 => 'Psalm 65-67;Romans 2',
            214 => 'Psalm 68-69;Romans 3',
            215 => 'Psalm 70-72;Romans 4',
            216 => 'Psalm 73-74;Romans 5',
            217 => 'Psalm 75-77;Romans 6',
            218 => 'Psalm 78;Romans 7',
            219 => 'Psalm 79-81;Romans 8:1-18',
            220 => 'Psalm 82-84;Romans 8:19-39',
            221 => 'Psalm 85-87;Romans 9',
            222 => 'Psalm 88-89;Romans 10',
            223 => 'Psalm 90-92;Romans 11:1-21',
            224 => 'Psalm 93-95;Romans 11:22-36',
            225 => 'Psalm 96-98;Romans 12',
            226 => 'Psalm 99-102;Romans 13',
            227 => 'Psalm 103-104;Romans 14',
            228 => 'Psalm 105-106;Romans 15:1-20',
            229 => 'Psalm 107-108;Romans 15:21-33',
            230 => 'Psalm 109-111;Romans 16',
            231 => 'Psalm 112-115;1Corinthians 1',
            232 => 'Psalm 116-118;1Corinthians 2',
            233 => 'Psalm 119:1-48;1Corinthians 3',
            234 => 'Psalm 119:49-104;1Corinthians 4',
            235 => 'Psalm 119:105-176;1Corinthians 5',
            236 => 'Psalm 120-123;1Corinthians 6',
            237 => 'Psalm 124-127;1Corinthians 7:1-24',
            238 => 'Psalm 128-131;1Corinthians 7:25-40',
            239 => 'Psalm 132-135;1Corinthians 8',
            240 => 'Psalm 136-138;1Corinthians 9',
            241 => 'Psalm 139-141;1Corinthians 10:1-13',
            242 => 'Psalm 142-144;1Corinthians 10:14-33',
            243 => 'Psalm 145-147;1Corinthians 11:1-15',
            244 => 'Psalm 148-150;1Corinthians 11:16-34',
            245 => 'Proverbs 1-2;1Corinthians 12',
            246 => 'Proverbs 3-4;1Corinthians 13',
            247 => 'Proverbs 5-6;1Corinthians 14:1-20',
            248 => 'Proverbs 7-8;1Corinthians 14:21-40',
            249 => 'Proverbs 9-10;1Corinthians 15:1-32',
            250 => 'Proverbs 11-12;1Corinthians 15:33-58',
            251 => 'Proverbs 13-14;1Corinthians 16',
            252 => 'Proverbs 15-16;2Corinthians 1',
            253 => 'Proverbs 17-18;2Corinthians 2',
            254 => 'Proverbs 19-20;2Corinthians 3',
            255 => 'Proverbs 21-22;2Corinthians 4',
            256 => 'Proverbs 23-24;2Corinthians 5',
            257 => 'Proverbs 25-27;2Corinthians 6',
            258 => 'Proverbs 28-29;2Corinthians 7',
            259 => 'Proverbs 30-31;2Corinthians 8',
            260 => 'Ecclesiastes 1-3;2Corinthians 9',
            261 => 'Ecclesiastes 4-6;2Corinthians 10',
            262 => 'Ecclesiastes 7-9;2Corinthians 11:1-15',
            263 => 'Ecclesiastes 10-12;2Corinthians 11:16-33',
            264 => 'SongOfSongs 1-3;2Corinthians 12',
            265 => 'SongOfSongs 4-5;2Corinthians 13',
            266 => 'SongOfSongs 6-8;Galatians 1',
            267 => 'Isaiah 1-3;Galatians 2',
            268 => 'Isaiah 4-6;Galatians 3',
            269 => 'Isaiah 7-9;Galatians 4',
            270 => 'Isaiah 10-12;Galatians 5',
            271 => 'Isaiah 13-15;Galatians 6',
            272 => 'Isaiah 16-18;Ephesians 1',
            273 => 'Isaiah 19-21;Ephesians 2',
            274 => 'Isaiah 22-23;Ephesians 3',
            275 => 'Isaiah 24-26;Ephesians 4',
            276 => 'Isaiah 27-28;Ephesians 5',
            277 => 'Isaiah 29-30;Ephesians 6',
            278 => 'Isaiah 31-33;Philippians 1',
            279 => 'Isaiah 34-36;Philippians 2',
            280 => 'Isaiah 37-38;Philippians 3',
            281 => 'Isaiah 39-40;Philippians 4',
            282 => 'Isaiah 41-42;Colossians 1',
            283 => 'Isaiah 43-44;Colossians 2',
            284 => 'Isaiah 45-47;Colossians 3',
            285 => 'Isaiah 48-49;Colossians 4',
            286 => 'Isaiah 50-52;1Thessalonians 1',
            287 => 'Isaiah 53-55;1Thessalonians 2',
            288 => 'Isaiah 56-58;1Thessalonians 3',
            289 => 'Isaiah 59-61;1Thessalonians 4',
            290 => 'Isaiah 62-64;1Thessalonians 5',
            291 => 'Isaiah 65-66;2Thessalonians 1',
            292 => 'Jeremiah 1-2;2Thessalonians 2',
            293 => 'Jeremiah 3-4;2Thessalonians 3',
            294 => 'Jeremiah 5-6;1Timothy 1',
            295 => 'Jeremiah 7-8;1Timothy 2',
            296 => 'Jeremiah 9-10;1Timothy 3',
            297 => 'Jeremiah 11-13;1Timothy 4',
            298 => 'Jeremiah 14-16;1Timothy 5',
            299 => 'Jeremiah 17-19;1Timothy 6',
            300 => 'Jeremiah 20-22;2Timothy 1',
            301 => 'Jeremiah 23-24;2Timothy 2',
            302 => 'Jeremiah 25-26;2Timothy 3',
            303 => 'Jeremiah 27-28;2Timothy 4',
            304 => 'Jeremiah 29-30;Titus 1',
            305 => 'Jeremiah 31-32;Titus 2',
            306 => 'Jeremiah 33-35;Titus 3',
            307 => 'Jeremiah 36-37;Philemon 1',
            308 => 'Jeremiah 38-39;Hebrews 1',
            309 => 'Jeremiah 40-42;Hebrews 2',
            310 => 'Jeremiah 43-45;Hebrews 3',
            311 => 'Jeremiah 46-48;Hebrews 4',
            312 => 'Jeremiah 49-50;Hebrews 5',
            313 => 'Jeremiah 51-52;Hebrews 6',
            314 => 'Lamentations 1-2;Hebrews 7',
            315 => 'Lamentations 3-5;Hebrews 8',
            316 => 'Ezekiel 1-3;Hebrews 9',
            317 => 'Ezekiel 4-6;Hebrews 10:1-23',
            318 => 'Ezekiel 7-9;Hebrews 10:24-39',
            319 => 'Ezekiel 10-12;Hebrews 11:1-19',
            320 => 'Ezekiel 13-15;Hebrews 11:20-40',
            321 => 'Ezekiel 16;Hebrews 12',
            322 => 'Ezekiel 17-19;Hebrews 13',
            323 => 'Ezekiel 20-21;James 1',
            324 => 'Ezekiel 22-23;James 2',
            325 => 'Ezekiel 24-26;James 3',
            326 => 'Ezekiel 27-28;James 4',
            327 => 'Ezekiel 29-31;James 5',
            328 => 'Ezekiel 32-33;1Peter 1',
            329 => 'Ezekiel 34-35;1Peter 2',
            330 => 'Ezekiel 36-37;1Peter 3',
            331 => 'Ezekiel 38-39;1Peter 4',
            332 => 'Ezekiel 40;1Peter 5',
            333 => 'Ezekiel 41-42;2Peter 1',
            334 => 'Ezekiel 43-44;2Peter 2',
            335 => 'Ezekiel 45-46;2Peter 3',
            336 => 'Ezekiel 47-48;1John 1',
            337 => 'Daniel 1-2;1John 2',
            338 => 'Daniel 3-4;1John 3',
            339 => 'Daniel 5-6;1John 4',
            340 => 'Daniel 7-8;1John 5',
            341 => 'Daniel 9-10;2John 1',
            342 => 'Daniel 11-12;3John 1',
            343 => 'Hosea 1-4;Jude 1',
            344 => 'Hosea 5-8;Revelation 1',
            345 => 'Hosea 9-11;Revelation 2',
            346 => 'Hosea 12-14;Revelation 3',
            347 => 'Joel 1-3;Revelation 4',
            348 => 'Amos 1-3;Revelation 5',
            349 => 'Amos 4-6;Revelation 6',
            350 => 'Amos 7-9;Revelation 7',
            351 => 'Obadiah 1;Revelation 8',
            352 => 'Jonah 1-4;Revelation 9',
            353 => 'Micah 1-3;Revelation 10',
            354 => 'Micah 4-5;Revelation 11',
            355 => 'Micah 6-7;Revelation 12',
            356 => 'Nahum 1-3;Revelation 13',
            357 => 'Habakkuk 1-3;Revelation 14',
            358 => 'Zephaniah 1-3;Revelation 15',
            359 => 'Haggai 1-2;Revelation 16',
            360 => 'Zechariah 1-3;Revelation 17',
            361 => 'Zechariah 4-6;Revelation 18',
            362 => 'Zechariah 7-9;Revelation 19',
            363 => 'Zechariah 10-12;Revelation 20',
            364 => 'Zechariah 13-14;Revelation 21',
            365 => 'Malachi 1-4;Revelation 22'
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
