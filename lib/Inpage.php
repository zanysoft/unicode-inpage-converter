<?php

class Inpage
{

    protected $ITU_Mapping = [
        "\u0004\u00A4\u0004\u00BF" => "\u06CC\u0626",
        "\u0004\u0081\u0004\u00BF" => "\u0623",
        "\u0004\u00A2\u0004\u00BF" => "\u0624",
        "\u0004\u0081\u0004\u00B3" => "\u0622",

        "\u0004\u00A1" => "\u06BA",
        "\u0004\u00A8" => "\u064D",
        "\u0004\u00D1" => "\u06F1",
        "\u0004\u00D2" => "\u06F2",
        "\u0004\u00D3" => "\u06F3",
        "\u0004\u00D4" => "\u06F4",
        "\u0004\u00D5" => "\u06F5",
        "\u0004\u00D6" => "\u06F6",
        "\u0004\u00D7" => "\u06F7",
        "\u0004\u00D8" => "\u06F8",
        "\u0004\u00D9" => "\u06F9",
        "\u0004\u00D0" => "\u06F0",
        "\u0004\u203A" => "\u0642",
        "\u0004\u00A2" => "\u0648",
        "\u0004\u02DC" => "\u0639",
        "\u0004\u017D" => "\u0631",
        "\u0004\u201E" => "\u062A",
        "\u0004\u00A5" => "\u06D2",
        "\u0004\u00A4" => "\u06CC",
        "\u0004\u00A6" => "\u06C1",
        "\u0004\u0192" => "\u067E",
        "\u0004\u00F2" => "\u060E",
        "\u0004\u0081" => "\u0627",
        "\u0004\u2019" => "\u0633",
        "\u0004\u2039" => "\u062F",
        "\u0004\u0161" => "\u0641",
        "\u0004\u009D" => "\u06AF",
        "\u0004\u00A7" => "\u06BE",
        "\u0004\u2021" => "\u062C",
        "\u0004\u0153" => "\u06A9",
        "\u0004\u017E" => "\u0644",
        "\u0004\u00EA" => "\u061B",
        "\u0004\u0090" => "\u0632",
        "\u0004\u201C" => "\u0634",
        "\u0004\u02C6" => "\u0686",
        "\u0004\u2013" => "\u0637",
        "\u0004\u201A" => "\u0628",
        "\u0004\u00A0" => "\u0646",
        "\u0004\u0178" => "\u0645",
        "\u0004\u00ED" => "\u060C",
        "\u0004\u00F3" => "\u06D4",
        "\u0004\u00C7" => "\u064B",
        "\u0004\u00B8" => "\u064A",
        "\u0004\u00F8" => "\u0610",
        "\u0004\u00A3" => "\u0626",
        "\u0004\u00B5" => "\u064C",
        "\u0004\u00AD" => "\u0651",
        "\u0004\u00B1" => "\u0652",
        "\u0004\u00F6" => "\uFDFA",
        "\u0004\u00AE" => "\u0611",
        "\u0004\u008F" => "\u0691",
        "\u0004\u2026" => "\u0679",
        "\u0004\u00F7" => "\u0601",
        "\u0004\u00BE" => "\u0657",
        "\u0004\u00BD" => "\u0670",
        "\u0004\u00B9" => "\u06C3",
        "\u0004\u00AC" => "\u064F",
        "\u0004\u00FD" => "\u2018",
        "\u0004\u00FE" => "\u2019",
        "\u0004\u00CF" => "\u0614",
        "\u0004\u00B3" => "\u0653",
        "\u0004\u201D" => "\u0635",
        "\u0004\u0152" => "\u0688",
        "\u0004\u00B0" => "\u0656",
        "\u0004\u2122" => "\u063A",
        "\u0004\u2030" => "\u062D",
        "\u0004\u2022" => "\u0636",
        "\u0004\u0160" => "\u062E",
        "\u0004\u00E7" => "\u0612",
        "\u0004\u008D" => "\u0630",
        "\u0004\u2018" => "\u0698",
        "\u0004\u2020" => "\u062B",
        "\u0004\u2014" => "\u0638",
        "\u0004\u00E6" => "\u0613",
        "\u0004\u00AA" => "\u0650",
        "\u0004\u00AB" => "\u064E",
        "\u0004\u00EE" => "\u061F",
        "\u0004\u00FA" => "",
        "\u0004\u00FB" => "]",
        "\u0004\u00FC" => ".",
        "\u0004\u00DA" => "!",
        "\u0004\u00F9" => ",",
        "\u0004\u00F1" => "/",
        "\u0004\u00E1" => ")",
        "\u0004\u00E2" => "(",
        "\u0004\u00E9" => ":",
        "\u0004\u00A9" => " ",
        "\u0004\u00B4" => "",
        "\u0004 " => " ",
    ];
    protected $UTI_Mapping = [
        "\u06CC\u0626" => "\u0004\u00A4\u0004\u00BF",
        //"\u0627\u0004\b" => "\u0004\u0081\u0004\b",
        "\u0623" => "\u0004\u0081\u0004\u00BF",
        "\u0624" => "\u0004\u00A2\u0004\u00BF",
        "\u0622" => "\u0004\u0081\u0004\u00B3",
//---------------------------------------------------------------------------

        "\u06BA" => "\u0004\u00A1",
        "\u06BB" => "\u0004\u00A1",
        "\u064D" => "\u0004\u00A8",
        "\u06F1" => "\u0004\u00D1",
        "\u06F2" => "\u0004\u00D2",
        "\u06F3" => "\u0004\u00D3",
        "\u06F4" => "\u0004\u00D4",
        "\u06F5" => "\u0004\u00D5",
        "\u06F6" => "\u0004\u00D6",
        "\u06F7" => "\u0004\u00D7",
        "\u06F8" => "\u0004\u00D8",
        "\u06F9" => "\u0004\u00D9",
        "\u06F0" => "\u0004\u00D0",
        "\u0642" => "\u0004\u203A",
        "\u0648" => "\u0004\u00A2",
        "\u0639" => "\u0004\u02DC",
        "\u0631" => "\u0004\u017D",
        "\u062A" => "\u0004\u201E",
        "\u06D2" => "\u0004\u00A5",
        "\u0621" => "\u0004\u00A3",
        "\u06CC" => "\u0004\u00A4",
        "\u06C1" => "\u0004\u00A6",
        "\u067E" => "\u0004\u0192",
        "\u060E" => "\u0004\u00F2",
        "\u0627" => "\u0004\u0081",
        "\u0633" => "\u0004\u2019",
        "\u062F" => "\u0004\u2039",
        "\u0641" => "\u0004\u0161",
        "\u06AF" => "\u0004\u009D",
        "\u06BE" => "\u0004\u00A7",
        "\u062C" => "\u0004\u2021",
        "\u06A9" => "\u0004\u0153",
        "\u0644" => "\u0004\u017E",
        "\u061B" => "\u0004\u00EA",
        "\u0632" => "\u0004\u0090",
        "\u0634" => "\u0004\u201C",
        "\u0686" => "\u0004\u02C6",
        "\u0637" => "\u0004\u2013",
        "\u0628" => "\u0004\u201A",
        "\u0646" => "\u0004\u00A0",
        "\u0645" => "\u0004\u0178",
        "\u060C" => "\u0004\u00ED",
        "\u06D4" => "\u0004\u00F3",
        "\u064B" => "\u0004\u00C7",
        "\u064A" => "\u0004\u00B8",
        "\u0610" => "\u0004\u00F8",
        "\u0626" => "\u0004\u00A3",
        "\u064C" => "\u0004\u00B5",
        "\u0651" => "\u0004\u00AD",
        "\u0652" => "\u0004\u00B1",
        "\uFDFA" => "\u0004\u00F6",
        "\u0611" => "\u0004\u00AE",
        "\u0691" => "\u0004\u008F",
        "\u0679" => "\u0004\u2026",
        "\u0601" => "\u0004\u00F7",
        "\u0657" => "\u0004\u00BE",
        "\u0670" => "\u0004\u00BD",
        "\u06C3" => "\u0004\u00B9",
        "\u064F" => "\u0004\u00AC",
        "\u2018" => "\u0004\u00FD",
        "\u2019" => "\u0004\u00FE",
        "\u0614" => "\u0004\u00CF",
        "\u0653" => "\u0004\u00B3",
        "\u0635" => "\u0004\u201D",
        "\u0688" => "\u0004\u0152",
        "\u0656" => "\u0004\u00B0",
        "\u063A" => "\u0004\u2122",
        "\u062D" => "\u0004\u2030",
        "\u0636" => "\u0004\u2022",
        "\u062E" => "\u0004\u0160",
        "\u0612" => "\u0004\u00E7",
        "\u0630" => "\u0004\u008D",
        "\u0698" => "\u0004\u2018",
        "\u062B" => "\u0004\u2020",
        "\u0638" => "\u0004\u2014",
        "\u0613" => "\u0004\u00E6",
        "\u0650" => "\u0004\u00AA",
        "\u064E" => "\u0004\u00AB",
        "\u061F" => "\u0004\u00EE",
        "\u0020" => "\u0004 ",
        "[" => "\u0004\u00FA",
        "]" => "\u0004\u00FB",
        "." => "\u0004\u00FC",
        "!" => "\u0004\u00DA",
        "," => "\u0004\u00F9",
        "/" => "\u0004\u00F1",
        ")" => "\u0004\u00E1",
        "(" => "\u0004\u00E2",
        ":" => "\u0004\u00E9",
        //" " => "\u0004\u00A9",
        "" => "\u0004\u00B4",
        " " => "\u0004 "
    ];

    /**
     * @param string $inpageText
     * @return string
     */
    public function inpageToUnicode($inpageText)
    {
        $codeMappingExtra = [
            "\u0004\u00A4\u0004\u00BF" => "\u06CC\u0626",
            //"\u0004\u0081\u0004\b","\u0627\u0004\b");
            "\u0004\u0081\u0004\u00BF" => "\u0623",
            "\u0004\u00A2\u0004\u00BF" => "\u0624",
            "\u0004\u0081\u0004\u00B3" => "\u0622",
        ];

        foreach ($codeMappingExtra as $k => $v) {
            $foo = preg_replace('/(\\\\u)([0-9a-f]{4})/i', '\x{$2}', $k);
            $inpageText = preg_replace('/' . $foo . '/u', $v, $inpageText);
        }

        $codeMapping = $this->ITU_Mapping;
        foreach ($codeMapping as $k => $v) {
            $foo = preg_replace('/(\\\\u)([0-9a-f]{4})/i', '\x{$2}', $k);
            $inpageText = preg_replace('/' . $foo . '/u', $v, $inpageText);
        }

        return $this->unicodeString($inpageText);
    }

    /**
     * @param string $urduUnicodeText
     * @return string
     */
    public function unicodeToInpage($urduUnicodeText)
    {
        $inpageText = '';
        for ($i = 0; $i < mb_strlen($urduUnicodeText); $i++) {
            $character = mb_substr($urduUnicodeText, $i, 1);
            $inpageText .= $this->getInpageCharacterFor($character);
        }
        return $this->unicodeString($inpageText);
    }

    /**
     * @param string $urduCharacter
     * @return string
     */
    protected function getInpageCharacterFor($urduCharacter)
    {
        $unicode = $this->charToUnicode($urduCharacter);
        if (isset($this->UTI_Mapping[$unicode])) {
            return $this->UTI_Mapping[$unicode];
        }
        return $urduCharacter;
    }

    /**
     * @param string $str
     * @param string $encoding
     * @return string
     */
    protected function unicodeString($str, $encoding = 'UTF-8')
    {
        if (is_null($encoding)) $encoding = ini_get('mbstring.internal_encoding');
        return preg_replace_callback('/\\\\u([0-9a-f]{4})/ui', function ($match) use ($encoding) {
            return mb_convert_encoding(pack('H*', $match[1]), $encoding, 'UTF-16BE');
        }, $str);
    }

    /**
     * @param string $str
     * @param $encoding
     * @return string
     */
    protected function charToUnicode($str, $encoding = 'UTF-8')
    {
        $encoded = mb_convert_encoding($str, 'UTF-16BE', $encoding);
        return '\u' . strtoupper(bin2hex($encoded));
    }
}