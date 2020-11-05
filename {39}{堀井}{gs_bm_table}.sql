-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2020 at 11:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `book_nm` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `book_url` text COLLATE utf8_unicode_ci NOT NULL,
  `book_cmnt` text COLLATE utf8_unicode_ci NOT NULL,
  `star` int(11) NOT NULL,
  `regist_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `book_nm`, `book_url`, `book_cmnt`, `star`, `regist_datetime`) VALUES
(1, '予想どおりに不合理', 'https://www.amazon.co.jp/%E4%BA%88%E6%83%B3%E3%81%A9%E3%81%8A%E3%82%8A%E3%81%AB%E4%B8%8D%E5%90%88%E7%90%86-%E8%A1%8C%E5%8B%95%E7%B5%8C%E6%B8%88%E5%AD%A6%E3%81%8C%E6%98%8E%E3%81%8B%E3%81%99%E3%80%8C%E3%81%82%E3%81%AA%E3%81%9F%E3%81%8C%E3%81%9D%E3%82%8C%E3%82%92%E9%81%B8%E3%81%B6%E3%82%8F%E3%81%91%E3%80%8D-%E3%83%8F%E3%83%A4%E3%82%AB%E3%83%AF%E3%83%BB%E3%83%8E%E3%83%B3%E3%83%95%E3%82%A3%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3%E6%96%87%E5%BA%AB-%E3%83%80%E3%83%B3-%E3%82%A2%E3%83%AA%E3%82%A8%E3%83%AA%E3%83%BC/dp/4150503915/ref=sr_1_5?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E8%A1%8C%E5%8B%95%E7%B5%8C%E6%B8%88%E5%AD%A6&amp;qid=1603966993&amp;sr=8-5', '「現金は盗まないが鉛筆なら平気で失敬する」「頼まれごとならがんばるが安い報酬ではやる気が失せる」「同じプラセボ薬でも高額なほうが効く」――。人間は、どこまでも滑稽で「不合理」。でも、そんな人間の行動を「予想」することができれば、長続きしなかったダイエットに成功するかもしれないし、次なる大ヒット商品を生み出せるかもしれない! 行動経済学ブームに火をつけたベストセラーの文庫化。', 4, '2020-10-29 19:29:09'),
(2, 'ファスト&amp;スロー(上)', 'https://www.amazon.co.jp/%E3%83%95%E3%82%A1%E3%82%B9%E3%83%88-%E3%82%B9%E3%83%AD%E3%83%BC-%E4%B8%8A-%E3%81%82%E3%81%AA%E3%81%9F%E3%81%AE%E6%84%8F%E6%80%9D%E3%81%AF%E3%81%A9%E3%81%AE%E3%82%88%E3%81%86%E3%81%AB%E6%B1%BA%E3%81%BE%E3%82%8B%E3%81%8B-%E3%83%8F%E3%83%A4%E3%82%AB%E3%83%AF%E3%83%BB%E3%83%8E%E3%83%B3%E3%83%95%E3%82%A3%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3%E6%96%87%E5%BA%AB/dp/4150504105/ref=pd_bxgy_2/356-0991221-1908901?_encoding=UTF8&amp;pd_rd_i=4150504105&amp;pd_rd_r=c4e19ba5-8d76-4a1f-869b-4abb30b07343&amp;pd_rd_w=eHcHd&amp;pd_rd_wg=SKDP6&amp;pf_rd_p=e64b0a81-ca1b-4802-bd2c-a4b65bccc76e&amp;pf_rd_r=7MA914TS36PH81GY7SKX&amp;psc=1&amp;refRID=7MA914TS36PH81GY7SKX', '整理整頓好きの青年が図書館司書である確率は高い? 30ドルを確実にもらうか、80%の確率で45ドルの方がよいか? はたしてあなたは合理的に正しい判断を行なっているか、本書の設問はそれを意識するきっかけとなる。人が判断エラーに陥るパターンや理由を、行動経済学・認知心理学的実験で徹底解明。心理学者にしてノーベル経済学賞受賞の著者が、幸福の感じ方から投資家・起業家の心理までわかりやすく伝える。', 5, '2020-10-29 19:29:50'),
(3, '行動経済学まんが ヘンテコノミクス', 'https://www.amazon.co.jp/dp/4838729723/ref=sspa_dk_detail_1?psc=1&amp;pd_rd_i=4838729723p13NParams&amp;spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFONjhBWDkyV0g5MDAmZW5jcnlwdGVkSWQ9QTA5NDcyMzUxUzNSSUEwQ0xXMzlKJmVuY3J5cHRlZEFkSWQ9QTNTNkJIVFFRSVIwWE0md2lkZ2V0TmFtZT1zcF9kZXRhaWwmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl', '人は、なぜそれを買うのか。\r\n安いから? 質がいいから?\r\n否。そんなまっとうな理由だけで、人は行動しない。\r\nそこには、より人間的で、深い原理が横たわっている。\r\nこの本には、その原理が描かれている。\r\n漫画という娯楽の形を借りながら。', 5, '2020-10-29 19:30:30'),
(4, '実践　行動経済学', 'https://www.amazon.co.jp/%E5%AE%9F%E8%B7%B5-%E8%A1%8C%E5%8B%95%E7%B5%8C%E6%B8%88%E5%AD%A6-%E3%83%AA%E3%83%81%E3%83%A3%E3%83%BC%E3%83%89%E3%83%BB%E3%82%BB%E3%82%A4%E3%83%A9%E3%83%BC-ebook/dp/B06XKRVC8B/ref=sr_1_9?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E3%83%80%E3%83%8B%E3%82%A8%E3%83%AB+%E3%82%AB%E3%83%BC%E3%83%8D%E3%83%9E%E3%83%B3&amp;qid=1603967468&amp;s=digital-text&amp;sr=1-9', '賢く選び、より良く生きたいあなたをサポート!そんな新たな経済学の登場。\r\n\r\nなぜ貯金がたまらないのか?どんなローンが得なのだろう?賢い投資法とは?――ダイエット・禁煙から、お金にまつわる種々の問題まで、人生は難しい選択に満ちている。\r\n本書のテーマ「ナッジ」(NUDGE)は、「ヒジで軽く相手をつつくように」、適切な選択を促したり、危険を回避させるしぐさである。この心優しい“ナッジの経済学”の目的は、ごくごく平凡な人々を幸福へ向けて後押しすることにある。さらには、国民を不幸にしない公的保険制度のあり方、あるべき環境・省エネ政策の輪郭をも提示する。「使える行動経済学」の全米ベストセラー。', 4, '2020-10-29 19:31:45'),
(6, '超ヤバい経済学', 'https://www.amazon.co.jp/%E8%B6%85%E3%83%A4%E3%83%90%E3%81%84%E7%B5%8C%E6%B8%88%E5%AD%A6-%E3%82%B9%E3%83%86%E3%82%A3%E3%83%BC%E3%83%B4%E3%83%B3%E3%83%BB%EF%BC%A4%E3%83%BB%E3%83%AC%E3%83%B4%E3%82%A3%E3%83%83%E3%83%88-ebook/dp/B00LF3TUBG/ref=bmx_1/356-0991221-1908901?_encoding=UTF8&amp;pd_rd_i=B00LF3TUBG&amp;pd_rd_r=70194f13-cc2b-4045-9c3f-10fc12365cde&amp;pd_rd_w=syjY5&amp;pd_rd_wg=zog2N&amp;pf_rd_p=d8129fd0-71ba-441f-9763-4126e4aaa2ae&amp;pf_rd_r=GBNJVVNEPPTT5VW86D2C&amp;psc=1&amp;refRID=GBNJVVNEPPTT5VW86D2C', '完成まで４年をかけたこの続編『超ヤバい経済学』は、「余裕で１冊目よりずっといいって胸を張って言える」と著者も自信満々。『ヤバい経済学』以上にヤバい内容で、読者を惹きつけて離しません。\r\n「経済学的アプローチ」と出てきますが、『ヤバい経済学』と同様に経済学の知識がなくても大丈夫です。売春婦の戦略から地球を冷やす方法まで、レヴィットとダブナーのコンビが世の中の見方をまたひっくり返すのをぜひお楽しみください。', 3, '2020-10-29 19:33:07'),
(7, '学習する組織 ― システム思考で未来を創造する', 'https://www.amazon.co.jp/%E5%AD%A6%E7%BF%92%E3%81%99%E3%82%8B%E7%B5%84%E7%B9%94-%E2%80%95-%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0%E6%80%9D%E8%80%83%E3%81%A7%E6%9C%AA%E6%9D%A5%E3%82%92%E5%89%B5%E9%80%A0%E3%81%99%E3%82%8B-%E3%83%94%E3%83%BC%E3%82%BF%E3%83%BC%E3%83%BB%EF%BC%AD%E3%83%BB%E3%82%BB%E3%83%B3%E3%82%B2-ebook/dp/B071WR7XMH/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E5%AD%A6%E7%BF%92%E3%81%99%E3%82%8B%E7%B5%84%E7%B9%94&amp;qid=1603967641&amp;s=digital-text&amp;sr=1-1', '今日、世界はますます複雑になり、ビジネス環境は日々変容し、私たちの仕事はかつてなく「学習」が求められるものとなった。これまでのマネジメントの枠組みはもはや通用しない。不確実性に満ちた現代、私たちの生存と繁栄の鍵となるのは、組織としての「学習能力」である。――自律的かつ柔軟に進化しつづける「学習する組織」のコンセプトと構築法を説いた本書は、世界100万部を超えるベストセラーとなり、90年代のビジネス界に一大ムーブメントを巻き起こした。2006年刊の増補改訂版である本書『学習する組織』は、企業、学校、地域コミュニティ、社会課題など、さまざまな実践事例を踏まえて大幅に加筆修正されており、いま個人・企業・社会に求められる真の「変革」とは何かを私たちに問いかける。ユニリーバ、VISA、インテル、世界銀行、ヒューレット・パッカードなど多様な組織で導入されてきた「学習する組織」。著者ピーター・センゲの深い人間洞察と豊富なケーススタディに裏打ちされた本書を通じて、管理ではなく学習を、正解への固執ではなく好奇心を、恐怖ではなく愛を基盤とする、新たな「マネジメント」のあり方があなたにも見えてくるに違いない。', 4, '2020-10-29 19:34:29'),
(8, 'U理論', 'https://www.amazon.co.jp/dp/B077Z5L1PX/ref=sspa_dk_detail_0?psc=1&amp;pd_rd_i=B077Z5L1PXp13NParams&amp;spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyUVU3OVpVOVM2R1VIJmVuY3J5cHRlZElkPUEwMzc1MTE4UktHQkJGRFQxMTdQJmVuY3J5cHRlZEFkSWQ9QTM1MzZWOTdSTEY5R0smd2lkZ2V0TmFtZT1zcF9kZXRhaWwmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl', '自己・組織・社会のあり方を根本から問い直す\r\n\r\nイノベーションと変革のプロセスを体系化し、各界に大きな影響を与えている変革理論「U理論」。それは革新的なアイデアを具現化する方法であるとともに、真の自己を見出す道でもある――。ますます混沌とする世界に私たちはどう向き合うのか。豊富な実践事例を踏まえ改訂された第二版。\r\n\r\n盲点に気づき、真の自己につながる時、すべてが変わり始める――。\r\n\r\nVUCA（変動、不確実性、複雑性、曖昧さ）の時代、私たちが直面する課題に対処するには、「過去から学ぶ」のでは到底足りない。必要なのは、「未来から学ぶ」ことである――。経営学から心理学、認知科学、東洋思想にまで及ぶ学際的な研究と、多様な分野のイノベーターたちへの取材をもとにMITで生まれたU理論。その学習と創造のプロセスは、企業・行政・非営利セクターなどあらゆる分野で変革に取り組む人々に支持され、実践されている。\r\n\r\n自らの盲点に気づき、真の自己――知とインスピレーションの最も深い源――にアクセスすること。「出現することを望んでいる未来」をともに感じ取り、ともに創り出すこと……。自らのものの見方・考え方に大きな転換を迫るUプロセスは、自己・組織・社会の「あり方」を根本から変え、目覚ましい成長をもたらす力を秘めている。\r\n\r\nこの第二版では、U理論誕生から今日までに生まれた世界各地の事例を踏まえ、5つの変化の傾向を示す新たな前書きが追加されたほか、全編にわたり加筆・修正が施された。ケルビー・ビードによる8枚のカラー挿画はUプロセスの旅の見取り図となるだろう。', 2, '2020-10-29 19:35:14'),
(9, 'FACTFULNESS（ファクトフルネス）10の思い込みを乗り越え、データを基に世界を正しく見る習慣', 'https://www.amazon.co.jp/FACTFULNESS%EF%BC%88%E3%83%95%E3%82%A1%E3%82%AF%E3%83%88%E3%83%95%E3%83%AB%E3%83%8D%E3%82%B9%EF%BC%8910%E3%81%AE%E6%80%9D%E3%81%84%E8%BE%BC%E3%81%BF%E3%82%92%E4%B9%97%E3%82%8A%E8%B6%8A%E3%81%88%E3%80%81%E3%83%87%E3%83%BC%E3%82%BF%E3%82%92%E5%9F%BA%E3%81%AB%E4%B8%96%E7%95%8C%E3%82%92%E6%AD%A3%E3%81%97%E3%81%8F%E8%A6%8B%E3%82%8B%E7%BF%92%E6%85%A3-%E3%83%8F%E3%83%B3%E3%82%B9%E3%83%BB%E3%83%AD%E3%82%B9%E3%83%AA%E3%83%B3%E3%82%B0-ebook/dp/B07LG7TG5N/ref=msx_wsirn_v1_3/358-3245957-6734667?_encoding=UTF8&amp;pd_rd_i=B07LG7TG5N&amp;pd_rd_r=2324ba9f-9de0-45f2-a58e-ac9c50232b8b&amp;pd_rd_w=yDAmj&amp;pd_rd_wg=bZOhf&amp;pf_rd_p=5369296e-7a8b-4cb4-8afd-800132ad0363&amp;pf_rd_r=T436K6YDEY1R1FF69P0P&amp;psc=1&amp;refRID=T436K6YDEY1R1FF69P0P', '追加', 5, '2020-11-03 12:40:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
