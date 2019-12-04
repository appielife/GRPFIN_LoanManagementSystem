<?php
namespace BCL\easyPDF\Printer;
abstract class prnResult
{
    const PRN_R_UNKNOWN = -2147155969;
    const PRN_R_INTERNAL = -2147155968;
    const PRN_R_INVALID_PARAM = -2147155967;
    const PRN_R_SETUP_INVALID = -2147155966;
    const PRN_R_LICENSE_INVALID = -2147155965;
    const PRN_R_LICENSE_EXPIRED = -2147155964;
    const PRN_R_PRINTER_ACCESS_DENIED = -2147155963;
    const PRN_R_PRINTER_NOT_FOUND = -2147155962;
    const PRN_R_CANCELED = -2147155961;
    const PRN_R_USER_CANCELED = -2147155960;
    const PRN_R_OUT_OF_MEMORY = -2147155959;
    const PRN_R_CONVERSION_FAILED = -2147155958;
    const PRN_R_OPEN_INFILE = -2147155957;
    const PRN_R_CREATE_OUTFILE = -2147155956;
    const PRN_R_CREATE_TEMPFILE = -2147155955;
    const PRN_R_REGISTRY_ACCESS_DENIED = -2147155954;
    const PRN_R_FEATURE_NOT_ENABLED = -2147155953;
    const PRN_R_FONT_EMBED_FAILED = -2147155952;
    const PRN_R_UNSUPPORTED_ICC = -2147155951;
    const PRN_R_SUCCESS = 0;
}
abstract class prnConversionResult
{
    const PRN_CR_UNKNOWN = -1;
    const PRN_CR_UNKNOWN_INIT = -2;
    const PRN_CR_UNKNOWN_PRINT = -3;
    const PRN_CR_CONVERSION = -4;
    const PRN_CR_CONVERSION_INIT = -5;
    const PRN_CR_CONVERSION_PRINT = -6;
    const PRN_CR_INITIALIZATION_TIMEOUT = -17;
    const PRN_CR_PAGE_CONVERSION_TIMEOUT = -18;
    const PRN_CR_FILE_CONVERSION_TIMEOUT = -19;
    const PRN_CR_CANCELED = -20;
    const PRN_CR_CANCELED_INIT = -21;
    const PRN_CR_CANCELED_PRINT = -22;
    const PRN_CR_PROCESS_GONE = -33;
    const PRN_CR_PROCESS_GONE_INIT = -34;
    const PRN_CR_PROCESS_GONE_PRINT = -35;
    const PRN_CR_OPEN_APP = -36;
    const PRN_CR_OPEN_DOC = -37;
    const PRN_CR_SET_PRINTER = -38;
    const PRN_CR_SET_TEMP_DATA = -49;
    const PRN_CR_SET_APP_SETTING = -50;
    const PRN_CR_SET_DOC_SETTING = -51;
    const PRN_CR_EXEC_MACRO = -52;
    const PRN_CR_PASSWORD_PROTECTED = -53;
    const PRN_CR_OUT_OF_MEMORY = -54;
    const PRN_CR_NO_FILE_ASSOCIATION = -65;
    const PRN_CR_ADDIN_UNKNOWN = -66;
    const PRN_CR_ADDIN_NOT_FOUND = -67;
    const PRN_CR_ADDIN_CONNECT = -68;
    const PRN_CR_ADDIN_EXEC = -69;
    const PRN_CR_ADDIN_TIMEOUT = -70;
    const PRN_CR_QUQUE_WAIT_TIMEOUT = -81;
    const PRN_CR_USER_MISMATCH = -82;
    const PRN_CR_XMLLITE_MISSING = -83;
    const PRN_CR_SUCCESS = 0;
}
abstract class prnPrinterResult
{
    const PRN_PR_UNKNOWN = -1;
    const PRN_PR_CANCELED = -2;
    const PRN_PR_NO_OWNER = -3;
    const PRN_PR_NO_FILENAME = -4;
    const PRN_PR_INVALID_FILENAME = -5;
    const PRN_PR_OUT_OF_MEMORY = -6;
    const PRN_PR_INVALID_COMPONENTS = -17;
    const PRN_PR_INVALID_LICENSE = -18;
    const PRN_PR_CREATE_OUTFILE = -19;
    const PRN_PR_INVALID_PDF_OUTPUT = -20;
    const PRN_PR_SIG_FAILED = -21;
    const PRN_PR_NO_SIG_PASSWD = -22;
    const PRN_PR_INVALID_SIG_PASSWD = -33;
    const PRN_PR_INVALID_SIG_IDFILE = -34;
    const PRN_PR_LICENSE_EXPIRED = -35;
    const PRN_PR_FEATURE_NOT_ENABLED = -36;
    const PRN_PR_FONT_EMBED_FAILED = -49;
    const PRN_PR_UNSUPPORTED_ICC = -50;
    const PRN_PR_SUCCESS = 0;
}
abstract class prnMonitorResponse
{
    const PRN_MON_CONTINUE_CONVERSION = 0;
    const PRN_MON_DISPOSE_CONVERSION = -2;
    const PRN_MON_CANCEL_CONVERSION = -1;
}
abstract class prnPaperSize
{
    const PRN_PAPER_LETTER = 1;
    const PRN_PAPER_LETTERSMALL = 2;
    const PRN_PAPER_TABLOID = 3;
    const PRN_PAPER_LEDGER = 4;
    const PRN_PAPER_LEGAL = 5;
    const PRN_PAPER_STATEMENT = 6;
    const PRN_PAPER_EXECUTIVE = 7;
    const PRN_PAPER_A3 = 8;
    const PRN_PAPER_A4 = 9;
    const PRN_PAPER_A4SMALL = 10;
    const PRN_PAPER_A5 = 11;
    const PRN_PAPER_B4 = 12;
    const PRN_PAPER_B5 = 13;
    const PRN_PAPER_FOLIO = 14;
    const PRN_PAPER_QUARTO = 15;
    const PRN_PAPER_10X14 = 16;
    const PRN_PAPER_11X17 = 17;
    const PRN_PAPER_NOTE = 18;
    const PRN_PAPER_ENV_9 = 19;
    const PRN_PAPER_ENV_10 = 20;
    const PRN_PAPER_ENV_11 = 21;
    const PRN_PAPER_ENV_12 = 22;
    const PRN_PAPER_ENV_14 = 23;
    const PRN_PAPER_CSHEET = 24;
    const PRN_PAPER_DSHEET = 25;
    const PRN_PAPER_ESHEET = 26;
    const PRN_PAPER_ENV_DL = 27;
    const PRN_PAPER_ENV_C5 = 28;
    const PRN_PAPER_ENV_C3 = 29;
    const PRN_PAPER_ENV_C4 = 30;
    const PRN_PAPER_ENV_C6 = 31;
    const PRN_PAPER_ENV_C65 = 32;
    const PRN_PAPER_ENV_B4 = 33;
    const PRN_PAPER_ENV_B5 = 34;
    const PRN_PAPER_ENV_B6 = 35;
    const PRN_PAPER_ENV_ITALY = 36;
    const PRN_PAPER_ENV_MONARCH = 37;
    const PRN_PAPER_ENV_PERSONAL = 38;
    const PRN_PAPER_FANFOLD_US = 39;
    const PRN_PAPER_FANFOLD_STD_GERMAN = 40;
    const PRN_PAPER_FANFOLD_LGL_GERMAN = 41;
    const PRN_PAPER_ISO_B4 = 42;
    const PRN_PAPER_JAPANESE_POSTCARD = 43;
    const PRN_PAPER_9X11 = 44;
    const PRN_PAPER_10X11 = 45;
    const PRN_PAPER_15X11 = 46;
    const PRN_PAPER_ENV_INVITE = 47;
    const PRN_PAPER_RESERVED_48 = 48;
    const PRN_PAPER_RESERVED_49 = 49;
    const PRN_PAPER_LETTER_EXTRA = 50;
    const PRN_PAPER_LEGAL_EXTRA = 51;
    const PRN_PAPER_TABLOID_EXTRA = 52;
    const PRN_PAPER_A4_EXTRA = 53;
    const PRN_PAPER_LETTER_TRANSVERSE = 54;
    const PRN_PAPER_A4_TRANSVERSE = 55;
    const PRN_PAPER_LETTER_EXTRA_TRANSVERSE = 56;
    const PRN_PAPER_A_PLUS = 57;
    const PRN_PAPER_B_PLUS = 58;
    const PRN_PAPER_LETTER_PLUS = 59;
    const PRN_PAPER_A4_PLUS = 60;
    const PRN_PAPER_A5_TRANSVERSE = 61;
    const PRN_PAPER_B5_TRANSVERSE = 62;
    const PRN_PAPER_A3_EXTRA = 63;
    const PRN_PAPER_A5_EXTRA = 64;
    const PRN_PAPER_B5_EXTRA = 65;
    const PRN_PAPER_A2 = 66;
    const PRN_PAPER_A3_TRANSVERSE = 67;
    const PRN_PAPER_A3_EXTRA_TRANSVERSE = 68;
    const PRN_PAPER_DBL_JAPANESE_POSTCARD = 69;
    const PRN_PAPER_A6 = 70;
    const PRN_PAPER_JENV_KAKU2 = 71;
    const PRN_PAPER_JENV_KAKU3 = 72;
    const PRN_PAPER_JENV_CHOU3 = 73;
    const PRN_PAPER_JENV_CHOU4 = 74;
    const PRN_PAPER_LETTER_ROTATED = 75;
    const PRN_PAPER_A3_ROTATED = 76;
    const PRN_PAPER_A4_ROTATED = 77;
    const PRN_PAPER_A5_ROTATED = 78;
    const PRN_PAPER_B4_JIS_ROTATED = 79;
    const PRN_PAPER_B5_JIS_ROTATED = 80;
    const PRN_PAPER_JAPANESE_POSTCARD_ROTATED = 81;
    const PRN_PAPER_DBL_JAPANESE_POSTCARD_ROTATED = 82;
    const PRN_PAPER_A6_ROTATED = 83;
    const PRN_PAPER_JENV_KAKU2_ROTATED = 84;
    const PRN_PAPER_JENV_KAKU3_ROTATED = 85;
    const PRN_PAPER_JENV_CHOU3_ROTATED = 86;
    const PRN_PAPER_JENV_CHOU4_ROTATED = 87;
    const PRN_PAPER_B6_JIS = 88;
    const PRN_PAPER_B6_JIS_ROTATED = 89;
    const PRN_PAPER_12X11 = 90;
    const PRN_PAPER_JENV_YOU4 = 91;
    const PRN_PAPER_JENV_YOU4_ROTATED = 92;
    const PRN_PAPER_P16K = 93;
    const PRN_PAPER_P32K = 94;
    const PRN_PAPER_P32KBIG = 95;
    const PRN_PAPER_PENV_1 = 96;
    const PRN_PAPER_PENV_2 = 97;
    const PRN_PAPER_PENV_3 = 98;
    const PRN_PAPER_PENV_4 = 99;
    const PRN_PAPER_PENV_5 = 100;
    const PRN_PAPER_PENV_6 = 101;
    const PRN_PAPER_PENV_7 = 102;
    const PRN_PAPER_PENV_8 = 103;
    const PRN_PAPER_PENV_9 = 104;
    const PRN_PAPER_PENV_10 = 105;
    const PRN_PAPER_P16K_ROTATED = 106;
    const PRN_PAPER_P32K_ROTATED = 107;
    const PRN_PAPER_P32KBIG_ROTATED = 108;
    const PRN_PAPER_PENV_1_ROTATED = 109;
    const PRN_PAPER_PENV_2_ROTATED = 110;
    const PRN_PAPER_PENV_3_ROTATED = 111;
    const PRN_PAPER_PENV_4_ROTATED = 112;
    const PRN_PAPER_PENV_5_ROTATED = 113;
    const PRN_PAPER_PENV_6_ROTATED = 114;
    const PRN_PAPER_PENV_7_ROTATED = 115;
    const PRN_PAPER_PENV_8_ROTATED = 116;
    const PRN_PAPER_PENV_9_ROTATED = 117;
    const PRN_PAPER_PENV_10_ROTATED = 118;
}
abstract class prnPaperOrientation
{
    const PRN_PAPER_ORIENT_PORTRAIT = 0;
    const PRN_PAPER_ORIENT_LANDSCAPE = 1;
}
abstract class prnContentOrientation
{
    const PRN_CONTENT_ORIENT_HORIZONTAL = 0;
    const PRN_CONTENT_ORIENT_VERTICAL = 1;
}
abstract class prnPrintColorType
{
    const PRN_PRINT_COLOR_COLOR = 0;
    const PRN_PRINT_COLOR_GRAYSCALE = 1;
}
abstract class prnFontEmbedding
{
    const PRN_FONT_EMBED_NONE = 0;
    const PRN_FONT_EMBED_SUBSET = 1;
    const PRN_FONT_EMBED_FULLSET = 2;
}
abstract class prnFontSubstitution
{
    const PRN_FONT_SUBST_NONE = 0;
    const PRN_FONT_SUBST_TABLE = 1;
    const PRN_FONT_SUBST_PDF = 2;
}
abstract class prnImageCompression
{
    const PRN_IMAGE_COMPRESS_JPEG = 0;
    const PRN_IMAGE_COMPRESS_ZIP = 1;
    const PRN_IMAGE_COMPRESS_JPEG2K = 2;
}
abstract class prnWmarkHPosition
{
    const PRN_WMARK_HPOS_LEFT = 0;
    const PRN_WMARK_HPOS_CENTER = 1;
    const PRN_WMARK_HPOS_RIGHT = 2;
}
abstract class prnWmarkVPosition
{
    const PRN_WMARK_VPOS_TOP = 0;
    const PRN_WMARK_VPOS_CENTER = 1;
    const PRN_WMARK_VPOS_BOTTOM = 2;
}
abstract class prnWmarkZOrder
{
    const PRN_WMARK_ZORDER_TOP = 0;
    const PRN_WMARK_ZORDER_BOTTOM = 1;
}
abstract class prnWmarkAlignment
{
    const PRN_WMARK_ALIGN_LEFT = 0;
    const PRN_WMARK_ALIGN_CENTER = 1;
    const PRN_WMARK_ALIGN_RIGHT = 2;
}
abstract class prnStampHPosition
{
    const PRN_STAMP_HPOS_LEFT = 0;
    const PRN_STAMP_HPOS_CENTER = 1;
    const PRN_STAMP_HPOS_RIGHT = 2;
}
abstract class prnStampVPosition
{
    const PRN_STAMP_VPOS_TOP = 0;
    const PRN_STAMP_VPOS_CENTER = 1;
    const PRN_STAMP_VPOS_BOTTOM = 2;
}
abstract class prnStampZOrder
{
    const PRN_STAMP_ZORDER_TOP = 0;
    const PRN_STAMP_ZORDER_BOTTOM = 1;
}
abstract class prnFolderDefault
{
    const PRN_FOLDER_DEFAULT_DESKTOP = 0;
    const PRN_FOLDER_DEFAULT_MYDOCUMENTS = 1;
    const PRN_FOLDER_DEFAULT_SPECIFY = 2;
}
abstract class prnSecEncryption
{
    const PRN_SEC_ENCRYPT_40BITS = 0;
    const PRN_SEC_ENCRYPT_128BITS = 1;
}
abstract class prnSecAnnotationPerm
{
    const PRN_SEC_ANNOT_PERM_FULL = 0;
    const PRN_SEC_ANNOT_PERM_NONE = 1;
    const PRN_SEC_ANNOT_PERM_FORM = 2;
}
abstract class prnSecExtractionPerm
{
    const PRN_SEC_EXTR_PERM_FULL = 0;
    const PRN_SEC_EXTR_PERM_NONE = 1;
    const PRN_SEC_EXTR_PERM_ACCESSIBILITY = 2;
}
abstract class prnSecModificationPerm
{
    const PRN_SEC_MODIFY_PERM_FULL = 0;
    const PRN_SEC_MODIFY_PERM_NONE = 1;
    const PRN_SEC_MODIFY_PERM_ASSEMBLY = 2;
}
abstract class prnSecPrintingPerm
{
    const PRN_SEC_PRINT_PERM_FULL = 0;
    const PRN_SEC_PRINT_PERM_NONE = 1;
    const PRN_SEC_PRINT_PERM_LOWRES = 2;
}
abstract class prnSigKeyLength
{
    const PRN_SIG_KEYLEN_1024 = 0;
    const PRN_SIG_KEYLEN_2048 = 1;
}
abstract class prnPdfAConformance
{
    const PRN_PDFA_CONFORM_NONE = 0;
    const PRN_PDFA_CONFORM_1B = 1;
    const PRN_PDFA_CONFORM_1B_TC1 = 2;
    const PRN_PDFA_CONFORM_2B = 3;
}
abstract class prnPdfXConformance
{
    const PRN_PDFX_CONFORM_NONE = 0;
    const PRN_PDFX_CONFORM_1A = 1;
    const PRN_PDFX_CONFORM_3 = 3;
}
abstract class prnPbPrintGraphics
{
    const PRN_PB_PRINT_GRAPHICS_LOWRES = 0;
    const PRN_PB_PRINT_GRAPHICS_HIGHRES = 1;
    const PRN_PB_PRINT_GRAPHICS_NONE = 2;
}
abstract class prnPpColorType
{
    const PRN_PP_PRINT_COLOR = 0;
    const PRN_PP_PRINT_GRAYSCALE = 1;
    const PRN_PP_PRINT_BLACK_AND_WHITE = 2;
}
abstract class prnPpHandoutOrder
{
    const PRN_PP_HANDOUT_HORIZONTAL_FIRST = 0;
    const PRN_PP_HANDOUT_VERTICAL_FIRST = 1;
}
abstract class prnPpOutputType
{
    const PRN_PP_OUTTYPE_SLIDES = 0;
    const PRN_PP_OUTTYPE_BUILDSLIDES = 1;
    const PRN_PP_OUTTYPE_TWOSLIDEHANDOUTS = 2;
    const PRN_PP_OUTTYPE_THREESLIDEHANDOUTS = 3;
    const PRN_PP_OUTTYPE_FOURSLIDEHANDOUTS = 4;
    const PRN_PP_OUTTYPE_SIXSLIDEHANDOUTS = 5;
    const PRN_PP_OUTTYPE_NINESLIDEHANDOUTS = 6;
    const PRN_PP_OUTTYPE_NOTESPAGES = 7;
    const PRN_PP_OUTTYPE_OUTLINE = 8;
}
abstract class prnMsoPaperSize
{
    const PRN_MSO_PAPER_10X14 = 0;
    const PRN_MSO_PAPER_11X17 = 1;
    const PRN_MSO_PAPER_LETTER = 2;
    const PRN_MSO_PAPER_LETTERSMALL = 3;
    const PRN_MSO_PAPER_LEGAL = 4;
    const PRN_MSO_PAPER_EXECUTIVE = 5;
    const PRN_MSO_PAPER_A3 = 6;
    const PRN_MSO_PAPER_A4 = 7;
    const PRN_MSO_PAPER_A4SMALL = 8;
    const PRN_MSO_PAPER_A5 = 9;
    const PRN_MSO_PAPER_B4 = 10;
    const PRN_MSO_PAPER_B5 = 11;
    const PRN_MSO_PAPER_CSHEET = 12;
    const PRN_MSO_PAPER_DSHEET = 13;
    const PRN_MSO_PAPER_ESHEET = 14;
    const PRN_MSO_PAPER_FANFOLDLEGALGERMAN = 15;
    const PRN_MSO_PAPER_FANFOLDSTDGERMAN = 16;
    const PRN_MSO_PAPER_FANFOLDUS = 17;
    const PRN_MSO_PAPER_FOLIO = 18;
    const PRN_MSO_PAPER_LEDGER = 19;
    const PRN_MSO_PAPER_NOTE = 20;
    const PRN_MSO_PAPER_QUARTO = 21;
    const PRN_MSO_PAPER_STATEMENT = 22;
    const PRN_MSO_PAPER_TABLOID = 23;
    const PRN_MSO_PAPER_ENVELOPE9 = 24;
    const PRN_MSO_PAPER_ENVELOPE10 = 25;
    const PRN_MSO_PAPER_ENVELOPE11 = 26;
    const PRN_MSO_PAPER_ENVELOPE12 = 27;
    const PRN_MSO_PAPER_ENVELOPE14 = 28;
    const PRN_MSO_PAPER_ENVELOPEB4 = 29;
    const PRN_MSO_PAPER_ENVELOPEB5 = 30;
    const PRN_MSO_PAPER_ENVELOPEB6 = 31;
    const PRN_MSO_PAPER_ENVELOPEC3 = 32;
    const PRN_MSO_PAPER_ENVELOPEC4 = 33;
    const PRN_MSO_PAPER_ENVELOPEC5 = 34;
    const PRN_MSO_PAPER_ENVELOPEC6 = 35;
    const PRN_MSO_PAPER_ENVELOPEC65 = 36;
    const PRN_MSO_PAPER_ENVELOPEDL = 37;
    const PRN_MSO_PAPER_ENVELOPEITALY = 38;
    const PRN_MSO_PAPER_ENVELOPEMONARCH = 39;
    const PRN_MSO_PAPER_ENVELOPEPERSONAL = 40;
    const PRN_MSO_PAPER_CUSTOM = 41;
}
abstract class prnBookmarks
{
    const PRN_BOOKMARKS_NONE = 0;
    const PRN_BOOKMARKS_FROM_HEADINGS = 1;
    const PRN_BOOKMARKS_FROM_BOOKMARKS = 2;
}
abstract class prnWdHyperlinksMethod
{
    const PRN_WD_HYPERLINKS_BY_TEXT = 1;
    const PRN_WD_HYPERLINKS_BY_MARKERS = 2;
}
abstract class prnRevisionMode
{
    const PRN_DEFAULT_REVISION = 0;
    const PRN_INLINE_REVISION = 1;
    const PRN_BALLOON_REVISION = 2;
}
abstract class prnVisPaperSize
{
    const PRN_VIS_PAPER_LETTER = 0;
    const PRN_VIS_PAPER_LEGAL = 1;
    const PRN_VIS_PAPER_A3 = 2;
    const PRN_VIS_PAPER_A4 = 3;
    const PRN_VIS_PAPER_A5 = 4;
    const PRN_VIS_PAPER_B4 = 5;
    const PRN_VIS_PAPER_B5 = 6;
    const PRN_VIS_PAPER_FOLIO = 7;
    const PRN_VIS_PAPER_NOTE = 8;
    const PRN_VIS_PAPER_C = 9;
    const PRN_VIS_PAPER_D = 10;
    const PRN_VIS_PAPER_E = 11;
}
abstract class prnPrintJobType
{
    const PRN_PRNJOB_NONE = 0;
    const PRN_PRNJOB_EXCEL = 1;
    const PRN_PRNJOB_GENERIC = 2;
    const PRN_PRNJOB_IE = 3;
    const PRN_PRNJOB_IMAGE = 4;
    const PRN_PRNJOB_PPT = 5;
    const PRN_PRNJOB_PUB = 6;
    const PRN_PRNJOB_VISIO = 7;
    const PRN_PRNJOB_WORD = 8;
    const PRN_PRNJOB_IE_EXTENDED = 9;
    const PRN_PRNJOB_WORD_EX = 10;
    const PRN_PRNJOB_WORD_INDEPENDENT = 11;
    const PRN_PRNJOB_XPS = 12;
    const PRN_PRNJOB_OPEN_OFFICE = 13;
    const PRN_PRNJOB_OUTLOOK = 14;
    const PRN_PRNJOB_EXCEL_EX = 15;
    const PRN_PRNJOB_PPT_EX = 16;
    const PRN_PRNJOB_PUB_EX = 17;
    const PRN_PRNJOB_VISIO_EX = 18;
    const PRN_PRNJOB_HTML = 19;
    const PRN_PRNJOB_CHM = 20;
    const PRN_PRNJOB_EML = 21;
}
abstract class prnUserGroup
{
    const PRN_GROUP_UNKNOWN = 0;
    const PRN_GROUP_GUESTS = 1;
    const PRN_GROUP_USERS = 2;
    const PRN_GROUP_POWER_USERS = 3;
    const PRN_GROUP_ADMINISTRATORS = 4;
}
abstract class prnViewerPanel
{
    const PRN_VIEWER_PANEL_NONE = 0;
    const PRN_VIEWER_PANEL_BOOKMARK = 1;
    const PRN_VIEWER_PANEL_PAGES = 2;
    const PRN_VIEWER_PANEL_LAYERS = 3;
    const PRN_VIEWER_PANEL_ATTACHMENTS = 4;
}
abstract class prnViewerPageLayout
{
    const PRN_VIEWER_PAGE_LAYOUT_DEFAULT = 0;
    const PRN_VIEWER_PAGE_LAYOUT_SINGLE = 1;
    const PRN_VIEWER_PAGE_LAYOUT_CONTINUOUS = 2;
    const PRN_VIEWER_PAGE_LAYOUT_FACING = 3;
    const PRN_VIEWER_PAGE_LAYOUT_CONTINUOUS_FACING = 4;
}
abstract class prnViewerMagnification
{
    const PRN_VIEWER_MAGNIFICATION_DEFAULT = 0;
    const PRN_VIEWER_MAGNIFICATION_FITPAGE = 1;
    const PRN_VIEWER_MAGNIFICATION_FITWIDTH = 2;
    const PRN_VIEWER_MAGNIFICATION_FITVISIBLE = 3;
}
abstract class prnViewerPrintScaling
{
    const PRN_VIEWER_PRINT_SCALING_DEFAULT = 0;
    const PRN_VIEWER_PRINT_SCALING_NONE = 1;
}
abstract class prnOfficePreference
{
    const PRN_MSOFFICE_DIRECT_PRINT = 0;
    const PRN_MSOFFICE_EXTENDED_PRINT = 1;
    const PRN_MSOFFICE_NATIVE_PDF = 2;
    const PRN_OPENOFFICE_NATIVE_PDF = 3;
}
abstract class prnWebBrowserPreference
{
    const PRN_IE_DIRECT_PRINT = 0;
    const PRN_IE_EXTENDED_PRINT = 1;
    const PRN_HTML_PRINT = 2;
}
abstract class prnHtmlRenderingEngine
{
    const PRN_HTML_ENGINE_WEBKIT = 0;
    const PRN_HTML_ENGINE_BLINK = 1;
}
function prnResultToMessage( $err )
{
    switch ( $err ) {
        case prnResult::PRN_R_UNKNOWN:
            return "Unknown error";
        case prnResult::PRN_R_INTERNAL:
            return "Internal error";
        case prnResult::PRN_R_INVALID_PARAM:
            return "Invalid parameter(s)";
        case prnResult::PRN_R_SETUP_INVALID:
            return "This product is not setup correctly";
        case prnResult::PRN_R_LICENSE_INVALID:
            return "Invalid license";
        case prnResult::PRN_R_LICENSE_EXPIRED:
            return "License expired";
        case prnResult::PRN_R_PRINTER_ACCESS_DENIED:
            return "Printer access denied";
        case prnResult::PRN_R_PRINTER_NOT_FOUND:
            return "Unable to find printer";
        case prnResult::PRN_R_CANCELED:
            return "Operation canceled";
        case prnResult::PRN_R_USER_CANCELED:
            return "Operation canceled by user";
        case prnResult::PRN_R_OUT_OF_MEMORY:
            return "Not enough memory to continue";
        case prnResult::PRN_R_CONVERSION_FAILED:
            return "Conversion failed";
        case prnResult::PRN_R_OPEN_INFILE:
            return "Unable to open input file";
        case prnResult::PRN_R_CREATE_OUTFILE:
            return "Unable to create output file";
        case prnResult::PRN_R_CREATE_TEMPFILE:
            return "Unable to create temporary file";
        case prnResult::PRN_R_REGISTRY_ACCESS_DENIED:
            return "Registry access denied";
        case prnResult::PRN_R_FEATURE_NOT_ENABLED:
            return "This feature is not enabled with supplied license";
        case prnResult::PRN_R_FONT_EMBED_FAILED:
            return "Font embedding failed";
        case prnResult::PRN_R_UNSUPPORTED_ICC:
            return "Invalid or unsupported ICC color profile";
        default:
            return "Unknown error";
    }
}
class PrinterException extends \Exception
{
    public function __construct( $message, $code )
    {
        parent::__construct( $message, $code );
    }
}
final class LoaderSettings
{
    public $useLoader = false;
    public $userName = null;
    public $password = null;
}
final class PrintJobInfoPDFSetting
{
    public $UiAlerts; // read-write
    public $UiFileDialog; // read-write
    public $UiPropertiesDialog; // read-write
}
final class PrintJobInfo
{
    public $ProcessID; // read-only
    public $JobID; // read-only
    public $PaperWidth; // read-only
    public $PaperHeight; // read-only
    public $ProcessName; // read-only
    public $OutputFileName; // read-write
    public $PDFSetting;
}
final class PrinterImpersonator
{
    private $userName = null;
    private $password = null;
    public function __construct( $userName, $password )
    {
        $this->userName = $userName;
        $this->password = $password;
    }
    public function LaunchPrinter( )
    {
        $printer                           = new Printer();
        $printer->loaderSettings->userName = $this->userName;
        $printer->loaderSettings->password = $this->password;
        return $printer;
    }
}
final class PrinterLoader
{
    private $useLoader = true;
    public function __construct( $useLoader = true )
    {
        $this->useLoader = $useLoader;
    }
    public function LaunchPrinter( )
    {
        $printer                            = new Printer();
        $printer->loaderSettings->useLoader = $this->useLoader;
        return $printer;
    }
}
final class IPC
{
    private $p = null;
    private $l = 0;
    public $PrintJobMonitor = null;
    const CM = 0xcafebabe;
    const SP = 0xface00f0;
    const GP = 0xface11f1;
    const ER = 0x1deed;
    const FR = 0xfaded;
    public function __construct( $bclPath, $exeName, $useLdr, $un, $pw )
    {
        $guid   = uniqid() . getmypid();
        $pN     = "BclEpPipe_" . $guid;
        $ldrSvc = $useLdr && ( $un == null || $pw == null );
        if ( $ldrSvc ) {
            $pLdr = $this->TOLP();
            if ( !$pLdr )
                throw new PrinterException( "The BCL easyPDF SDK Loader service is not running or busy", prnResult::PRN_R_SETUP_INVALID );
            $pN = str_pad( $pN, 46, '0' );
            fwrite( $pLdr, "p" . str_pad( $guid, 36, '0' ) );
            fclose( $pLdr );
        } else if ( $useLdr ) {
            $cLdr = new IPC( $bclPath, $exeName, false, null, null );
            $cLdr->W( pack( "llllla*la*la*la*", 32 + strlen( $un ) + strlen( $pw ) + strlen( $pN ), IPC::CM, 0, 0, strlen( $un ), $un, strlen( $pw ), $pw, strlen( $pN ), $pN, 4, "java" ) )->T();
        } else
            pclose( popen( "start /b \"\" \"" . $bclPath . $exeName . "\" " . $pN . " java", "r" ) );
        $fn = "\\\\" . php_uname( "n" ) . "\\pipe\\" . $pN;
        for ( ;; ) {
            $this->p = @fopen( $fn, "r+b" );
            if ( $this->p )
                break;
        }
    }
    public function __destruct( )
    {
        if ( $this->p ) {
            fclose( $this->p );
            $this->p = null;
        }
    }
    private function X( )
    {
        throw new PrinterException( "Communication error", prnResult::PRN_R_INTERNAL );
    }
    private function TOLP( )
    {
        for ( $i = 0;; $i++ ) {
            $pLdr = @fopen( "\\\\" . php_uname( "n" ) . "\\pipe\\80561910-CE52-4A37-A6A0-64FD34F09586", "r+b" );
            $err  = error_get_last();
            if ( $pLdr || $i + 1 >= 100 || strpos( $err[ "message" ], "No such file or directory" ) !== false )
                return $pLdr;
            usleep( 100000 );
        }
    }
    public function T( )
    {
        for ( ;; ) {
            list( $this->l, $retType ) = array_values( unpack( "ll/lt", fread( $this->p, 8 ) ) );
            $this->l -= 4;
            if ( $retType == self::FR ) {
                //echo "FuncReturn\n";
                $up  = unpack( "le", $this->R( 4 ) );
                $err = $up[ "e" ];
                if ( $err != 0 )
                    throw new PrinterException( prnResultToMessage( $err ), $err );
                return;
            } else if ( $retType == -557130239 ) // PrinterInit
                {
                //echo "PrinterInit\n";
                $up                   = unpack( "lv", $this->R( 4 ) );
                $uid                  = $up[ "v" ];
                $info                 = new PrintJobInfo();
                $info->OutputFileName = $this->RS();
                list( $info->ProcessID, $info->JobID, $info->PaperWidth, $info->PaperHeight ) = array_values( unpack( "la/lb/dw/dh", $this->R( 24 ) ) );
                $info->ProcessName = $this->RS();
                $up                = unpack( "lv", $this->R( 4 ) );
                $flags             = $up[ "v" ];
                $ret               = 0;
                if ( $this->PrintJobMonitor && $this->PrintJobMonitor->OnPrinterInit ) {
                    $info->PDFSetting                     = new PrintJobInfoPDFSetting();
                    $info->PDFSetting->UiAlerts           = ( flags & 1 ) != 0;
                    $info->PDFSetting->UiFileDialog       = ( flags & 2 ) != 0;
                    $info->PDFSetting->UiPropertiesDialog = ( flags & 4 ) != 0;
                    $ret                                  = call_user_func( $this->PrintJobMonitor->OnPrinterInit, $uid, $info );
                    $flags                                = ( $info->PDFSetting->UiAlerts ? 1 : 0 ) | ( $info->PDFSetting->UiFileDialog ? 2 : 0 ) | ( $info->PDFSetting->UiPropertiesDialog ? 4 : 0 );
                }
                $this->W( pack( "LLLa*ll", 16 + strlen( $info->OutputFileName ), self::ER, strlen( $info->OutputFileName ), $info->OutputFileName, $flags, $ret ) );
            } else if ( $retType == -557130238 ) {
                //echo "PrinterUpdate\n";
                $up                   = unpack( "lv", $this->R( 4 ) );
                $uid                  = $up[ "v" ];
                $info                 = new PrintJobInfo();
                $info->OutputFileName = $this->RS();
                list( $info->ProcessID, $info->JobID, $info->PaperWidth, $info->PaperHeight ) = array_values( unpack( "la/lb/dw/dh", $this->R( 24 ) ) );
                $info->ProcessName = $this->RS();
                $up                = unpack( "lv", $this->R( 4 ) );
                $flags             = $up[ "v" ];
                $ret               = 0;
                if ( $this->PrintJobMonitor && $this->PrintJobMonitor->OnPrinterUpdate ) {
                    $info->PDFSetting                     = new PrintJobInfoPDFSetting();
                    $info->PDFSetting->UiAlerts           = ( flags & 1 ) != 0;
                    $info->PDFSetting->UiFileDialog       = ( flags & 2 ) != 0;
                    $info->PDFSetting->UiPropertiesDialog = ( flags & 4 ) != 0;
                    $ret                                  = call_user_func( $this->PrintJobMonitor->OnPrinterUpdate, $uid, $info );
                }
                $this->W( pack( "LLl", 8, self::ER, $ret ) );
            } else if ( $retType == -557130237 ) {
                //echo "PrinterStart\n";
                $up  = unpack( "lv", $this->R( 4 ) );
                $uid = $up[ "v" ];
                $ret = 0;
                if ( $this->PrintJobMonitor && $this->PrintJobMonitor->OnPrinterStart )
                    $ret = call_user_func( $this->PrintJobMonitor->OnPrinterStart, $uid );
                $this->W( pack( "LLl", 8, self::ER, $ret ) );
            } else if ( $retType == -557130236 ) {
                //echo "StartPage\n";
                list( $uid, $PageNumber ) = array_values( unpack( "la/lb", $this->R( 8 ) ) );
                $ret = 0;
                if ( $this->PrintJobMonitor && $this->PrintJobMonitor->OnPageStart )
                    $ret = call_user_func( $this->PrintJobMonitor->OnPageStart, $uid, $PageNumber );
                $this->W( pack( "LLl", 8, self::ER, $ret ) );
            } else if ( $retType == -557130235 ) {
                //echo "PrinterEnd\n";
                list( $uid, $err ) = array_values( unpack( "la/lb", $this->R( 8 ) ) );
                $ret = 0;
                if ( $this->PrintJobMonitor && $this->PrintJobMonitor->OnPrinterEnd )
                    $ret = call_user_func( $this->PrintJobMonitor->OnPrinterEnd, $uid, $err );
                $this->W( pack( "LLl", 8, self::ER, $ret ) );
            } else
                $this->X();
        }
    }
    public function W( $s )
    {
        fwrite( $this->p, $s );
        return $this;
    }
    public function R( $l )
    {
        if ( $this->l < $l )
            $this->X();
        $this->l -= $l;
        return fread( $this->p, $l );
    }
    public function RS( )
    {
        $up = unpack( "ll", $this->R( 4 ) );
        $l  = $up[ "l" ];
        return $l == 0 ? "" : $this->R( $l );
    }
}
final class Printer
{
    public function RGB( $r, $g, $b )
    {
        return $r | ( $g << 8 ) | ( $b << 16 );
    }
    public function __construct( )
    {
        $this->loaderSettings = new LoaderSettings();
    }
    public function __destruct( )
    {
        if ( $this->c ) {
            $this->c->PrintJobMonitor = null;
            $this->c                  = null;
        }
    }
    public function Initialize( $Init )
    {
        $this->getc()->W( pack( "llllla*", 16 + strlen( $Init ), IPC::CM, $this->id, 1, strlen( $Init ), $Init ) )->T();
    }
    public function setLicenseKey( $value )
    {
        $this->getc()->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 2, strlen( $value ), $value ) )->T();
    }
    public function getLibraryVersionMajor( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 3 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getLibraryVersionMinor( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 4 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getUserGroup( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 5 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getUserName( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 6 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function getExeName( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 7 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function getTempPath( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 8 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function getPrinterSetting( )
    {
        if ( !$this->m_PrinterSetting ) {
            $this->m_PrinterSetting = new PrinterSetting( $this->getc(), 3 );
        }
        return $this->m_PrinterSetting;
    }
    public function getPrintJob( )
    {
        if ( !$this->m_PrintJob ) {
            $this->m_PrintJob = new PrintJob( $this->getc(), 1 );
        }
        return $this->m_PrintJob;
    }
    public function getExcelPrintJob( )
    {
        if ( !$this->m_ExcelPrintJob ) {
            $this->m_ExcelPrintJob = new ExcelPrintJob( $this->getc(), 9 );
        }
        return $this->m_ExcelPrintJob;
    }
    public function getGenericPrintJob( )
    {
        if ( !$this->m_GenericPrintJob ) {
            $this->m_GenericPrintJob = new GenericPrintJob( $this->getc(), 21 );
        }
        return $this->m_GenericPrintJob;
    }
    public function getIEPrintJob( )
    {
        if ( !$this->m_IEPrintJob ) {
            $this->m_IEPrintJob = new IEPrintJob( $this->getc(), 16 );
        }
        return $this->m_IEPrintJob;
    }
    public function getPowerPointPrintJob( )
    {
        if ( !$this->m_PowerPointPrintJob ) {
            $this->m_PowerPointPrintJob = new PowerPointPrintJob( $this->getc(), 11 );
        }
        return $this->m_PowerPointPrintJob;
    }
    public function getVisioPrintJob( )
    {
        if ( !$this->m_VisioPrintJob ) {
            $this->m_VisioPrintJob = new VisioPrintJob( $this->getc(), 13 );
        }
        return $this->m_VisioPrintJob;
    }
    public function getWordPrintJob( )
    {
        if ( !$this->m_WordPrintJob ) {
            $this->m_WordPrintJob = new WordPrintJob( $this->getc(), 6 );
        }
        return $this->m_WordPrintJob;
    }
    public function getPrintJobMonitor( )
    {
        if ( !$this->m_PrintJobMonitor ) {
            $this->m_PrintJobMonitor = new PrintJobMonitor( $this->getc(), 26 );
        }
        return $this->m_PrintJobMonitor;
    }
    public function getPrinterMonitor( )
    {
        if ( !$this->m_PrinterMonitor ) {
            $this->m_PrinterMonitor = new PrinterMonitor( $this->getc(), 25 );
        }
        return $this->m_PrinterMonitor;
    }
    public function getPublisherPrintJob( )
    {
        if ( !$this->m_PublisherPrintJob ) {
            $this->m_PublisherPrintJob = new PublisherPrintJob( $this->getc(), 22 );
        }
        return $this->m_PublisherPrintJob;
    }
    public function getImagePrintJob( )
    {
        if ( !$this->m_ImagePrintJob ) {
            $this->m_ImagePrintJob = new ImagePrintJob( $this->getc(), 24 );
        }
        return $this->m_ImagePrintJob;
    }
    public function GetFileExtensionOf( $FileName )
    {
        $this->getc()->W( pack( "llllla*", 16 + strlen( $FileName ), IPC::CM, $this->id, 21, strlen( $FileName ), $FileName ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function GetPrintJobTypeOf( $FileName )
    {
        $this->getc()->W( pack( "llllla*", 16 + strlen( $FileName ), IPC::CM, $this->id, 22, strlen( $FileName ), $FileName ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getDefaultPrinter( )
    {
        $this->getc()->W( pack( "llll", 12, IPC::GP, $this->id, 23 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setDefaultPrinter( $value )
    {
        $this->getc()->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 23, strlen( $value ), $value ) )->T();
    }
    public function getIEExtendedPrintJob( )
    {
        if ( !$this->m_IEExtendedPrintJob ) {
            $this->m_IEExtendedPrintJob = new IEExtendedPrintJob( $this->getc(), 18 );
        }
        return $this->m_IEExtendedPrintJob;
    }
    public function getWordPrintJobEx( )
    {
        if ( !$this->m_WordPrintJobEx ) {
            $this->m_WordPrintJobEx = new WordPrintJobEx( $this->getc(), 7 );
        }
        return $this->m_WordPrintJobEx;
    }
    public function getOpenOfficePrintJob( )
    {
        if ( !$this->m_OpenOfficePrintJob ) {
            $this->m_OpenOfficePrintJob = new OpenOfficePrintJob( $this->getc(), 15 );
        }
        return $this->m_OpenOfficePrintJob;
    }
    public function getOutlookPrintJob( )
    {
        if ( !$this->m_OutlookPrintJob ) {
            $this->m_OutlookPrintJob = new OutlookPrintJob( $this->getc(), 5 );
        }
        return $this->m_OutlookPrintJob;
    }
    public function getExcelPrintJobEx( )
    {
        if ( !$this->m_ExcelPrintJobEx ) {
            $this->m_ExcelPrintJobEx = new ExcelPrintJobEx( $this->getc(), 10 );
        }
        return $this->m_ExcelPrintJobEx;
    }
    public function getPowerPointPrintJobEx( )
    {
        if ( !$this->m_PowerPointPrintJobEx ) {
            $this->m_PowerPointPrintJobEx = new PowerPointPrintJobEx( $this->getc(), 12 );
        }
        return $this->m_PowerPointPrintJobEx;
    }
    public function getPublisherPrintJobEx( )
    {
        if ( !$this->m_PublisherPrintJobEx ) {
            $this->m_PublisherPrintJobEx = new PublisherPrintJobEx( $this->getc(), 23 );
        }
        return $this->m_PublisherPrintJobEx;
    }
    public function getVisioPrintJobEx( )
    {
        if ( !$this->m_VisioPrintJobEx ) {
            $this->m_VisioPrintJobEx = new VisioPrintJobEx( $this->getc(), 14 );
        }
        return $this->m_VisioPrintJobEx;
    }
    public function getHTMLPrintJob( )
    {
        if ( !$this->m_HTMLPrintJob ) {
            $this->m_HTMLPrintJob = new HTMLPrintJob( $this->getc(), 20 );
        }
        return $this->m_HTMLPrintJob;
    }
    private $m_PrinterSetting = null;
    private $m_PrintJob = null;
    private $m_ExcelPrintJob = null;
    private $m_GenericPrintJob = null;
    private $m_IEPrintJob = null;
    private $m_PowerPointPrintJob = null;
    private $m_VisioPrintJob = null;
    private $m_WordPrintJob = null;
    private $m_PrintJobMonitor = null;
    private $m_PrinterMonitor = null;
    private $m_PublisherPrintJob = null;
    private $m_ImagePrintJob = null;
    private $m_IEExtendedPrintJob = null;
    private $m_WordPrintJobEx = null;
    private $m_OpenOfficePrintJob = null;
    private $m_OutlookPrintJob = null;
    private $m_ExcelPrintJobEx = null;
    private $m_PowerPointPrintJobEx = null;
    private $m_PublisherPrintJobEx = null;
    private $m_VisioPrintJobEx = null;
    private $m_WordIndependentPrintJob = null;
    private $m_HTMLPrintJob = null;
    public $loaderSettings;
    public $launchTimeout = 60000; // milliseconds
    public $bclPath = "c:\\Program Files\\Common Files\\BCL Technologies\\easyPDF 8\\";
    private function getc( )
    {
        if ( !$this->c )
            $this->c = new IPC( $this->bclPath, "bepprint.exe", $this->loaderSettings->useLoader, $this->loaderSettings->userName, $this->loaderSettings->password );
        return $this->c;
    }
    private $c = null;
    private $id = 0;
}
class PrintJob
{
    public function __construct( $c, $id )
    {
        $this->c  = $c;
        $this->id = $id;
    }
    public function PrintOut( $InFileName, $OutFileName )
    {
        $this->c->W( pack( "llllla*la*", 20 + strlen( $InFileName ) + strlen( $OutFileName ), IPC::CM, $this->id, 1, strlen( $InFileName ), $InFileName, strlen( $OutFileName ), $OutFileName ) )->T();
    }
    public function getPDFSetting( )
    {
        if ( !$this->m_PDFSetting ) {
            $this->m_PDFSetting = new PDFSetting( $this->c, 65536 * $this->id + 2 );
        }
        return $this->m_PDFSetting;
    }
    public function getInitializationTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 3 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setInitializationTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 3, $value ) )->T();
    }
    public function getPageConversionTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 4 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPageConversionTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 4, $value ) )->T();
    }
    public function getFileConversionTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 5 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFileConversionTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 5, $value ) )->T();
    }
    public function setSignatureDigitalIDPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 6, strlen( $value ), $value ) )->T();
    }
    public function setBannerMessage( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 7, strlen( $value ), $value ) )->T();
    }
    public function getBannerMessage( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 7 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function getConversionResult( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 8 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getConversionResultMessage( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 9 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function getPrinterResult( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 10 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getPrinterResultMessage( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 11 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function PrintOut2( $InFileName )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $InFileName ), IPC::CM, $this->id, 12, strlen( $InFileName ), $InFileName ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function getMakeTempCopyOfInput( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 13 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMakeTempCopyOfInput( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 13, $value ? 1 : 0 ) )->T();
    }
    public function PrintOut3( $InStream, $FileExtension )
    {
        $this->c->W( pack( "lllll", 20 + strlen( $InStream ) + strlen( $FileExtension ), IPC::CM, $this->id, 14, strlen( $InStream ) ) )->W( $InStream )->W( pack( "la*", strlen( $FileExtension ), $FileExtension ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setPageFrom( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 15, $value ) )->T();
    }
    public function setPageTo( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 16, $value ) )->T();
    }
    public function getOfficePreference( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 17 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOfficePreference( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 17, $value ) )->T();
    }
    public function getWebBrowserPreference( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 18 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWebBrowserPreference( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 18, $value ) )->T();
    }
    private $m_PDFSetting = null;
    protected $c;
    protected $id;
}
class PDFSetting
{
    public function __construct( $c, $id )
    {
        $this->c  = $c;
        $this->id = $id;
    }
    public function Reset( )
    {
        $this->c->W( pack( "llll", 12, IPC::CM, $this->id, 1 ) )->T();
    }
    public function Update( )
    {
        $this->c->W( pack( "llll", 12, IPC::CM, $this->id, 2 ) )->T();
    }
    public function Save( )
    {
        $this->c->W( pack( "llll", 12, IPC::CM, $this->id, 3 ) )->T();
    }
    public function ShowPropertiesDialog( $HwndParent )
    {
        $this->c->W( pack( "lllll", 16, IPC::CM, $this->id, 4, $HwndParent ) )->T();
    }
    public function getFontEmbedding( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 5 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFontEmbedding( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 5, $value ) )->T();
    }
    public function getFontSubstitution( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 6 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFontSubstitution( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 6, $value ) )->T();
    }
    public function getImageDownsizing( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 7 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setImageDownsizing( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 7, $value ? 1 : 0 ) )->T();
    }
    public function getImageDownsizeResolution( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 8 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setImageDownsizeResolution( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 8, $value ) )->T();
    }
    public function getImageCompression( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 9 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setImageCompression( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 9, $value ) )->T();
    }
    public function getImageJPEGQuality( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 10 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setImageJPEGQuality( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 10, $value ) )->T();
    }
    public function getSecurity( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 11 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSecurity( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 11, $value ? 1 : 0 ) )->T();
    }
    public function getSecurityEncryption( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 12 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSecurityEncryption( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 12, $value ) )->T();
    }
    public function getSecurityUserPassword( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 13 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSecurityUserPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 13, strlen( $value ), $value ) )->T();
    }
    public function getSecurityOwnerPassword( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 14 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSecurityOwnerPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 14, strlen( $value ), $value ) )->T();
    }
    public function getSecurityAnnotation( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 15 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSecurityAnnotation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 15, $value ) )->T();
    }
    public function getSecurityExtraction( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 16 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSecurityExtraction( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 16, $value ) )->T();
    }
    public function getSecurityModification( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 17 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSecurityModification( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 17, $value ) )->T();
    }
    public function getSecurityPrinting( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 18 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSecurityPrinting( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 18, $value ) )->T();
    }
    public function getWatermarkCount( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 19 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getWatermark( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 20, $Index ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermark( $Index, $value )
    {
        $this->c->W( pack( "lllllc", 17, IPC::SP, $this->id, 20, $Index, $value ? 1 : 0 ) )->T();
    }
    public function getWatermarkText( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 21, $Index ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setWatermarkText( $Index, $value )
    {
        $this->c->W( pack( "lllllla*", 20 + strlen( $value ), IPC::SP, $this->id, 21, $Index, strlen( $value ), $value ) )->T();
    }
    public function getWatermarkFontName( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 22, $Index ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setWatermarkFontName( $Index, $value )
    {
        $this->c->W( pack( "lllllla*", 20 + strlen( $value ), IPC::SP, $this->id, 22, $Index, strlen( $value ), $value ) )->T();
    }
    public function getWatermarkFontSize( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 23, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkFontSize( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 23, $Index, $value ) )->T();
    }
    public function getWatermarkColor( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 24, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkColor( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 24, $Index, $value ) )->T();
    }
    public function getWatermarkAngle( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 25, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkAngle( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 25, $Index, $value ) )->T();
    }
    public function getWatermarkFirstPageOnly( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 26, $Index ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkFirstPageOnly( $Index, $value )
    {
        $this->c->W( pack( "lllllc", 17, IPC::SP, $this->id, 26, $Index, $value ? 1 : 0 ) )->T();
    }
    public function getWatermarkZOrder( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 27, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkZOrder( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 27, $Index, $value ) )->T();
    }
    public function getWatermarkOutlineOnly( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 28, $Index ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkOutlineOnly( $Index, $value )
    {
        $this->c->W( pack( "lllllc", 17, IPC::SP, $this->id, 28, $Index, $value ? 1 : 0 ) )->T();
    }
    public function getWatermarkHPosition( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 29, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkHPosition( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 29, $Index, $value ) )->T();
    }
    public function getWatermarkVPosition( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 30, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkVPosition( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 30, $Index, $value ) )->T();
    }
    public function getWatermarkTextAlignment( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 31, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkTextAlignment( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 31, $Index, $value ) )->T();
    }
    public function getWatermarkHOffset( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 32, $Index ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkHOffset( $Index, $value )
    {
        $this->c->W( pack( "llllld", 24, IPC::SP, $this->id, 32, $Index, $value ) )->T();
    }
    public function getWatermarkVOffset( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 33, $Index ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkVOffset( $Index, $value )
    {
        $this->c->W( pack( "llllld", 24, IPC::SP, $this->id, 33, $Index, $value ) )->T();
    }
    public function getWatermarkOpacity( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 34, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWatermarkOpacity( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 34, $Index, $value ) )->T();
    }
    public function getStampCount( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 35 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getStamp( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 36, $Index ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStamp( $Index, $value )
    {
        $this->c->W( pack( "lllllc", 17, IPC::SP, $this->id, 36, $Index, $value ? 1 : 0 ) )->T();
    }
    public function getStampFileName( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 37, $Index ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setStampFileName( $Index, $value )
    {
        $this->c->W( pack( "lllllla*", 20 + strlen( $value ), IPC::SP, $this->id, 37, $Index, strlen( $value ), $value ) )->T();
    }
    public function getStampHPosition( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 38, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampHPosition( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 38, $Index, $value ) )->T();
    }
    public function getStampVPosition( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 39, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampVPosition( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 39, $Index, $value ) )->T();
    }
    public function getStampZOrder( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 40, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampZOrder( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 40, $Index, $value ) )->T();
    }
    public function getStampFirstPageOnly( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 41, $Index ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampFirstPageOnly( $Index, $value )
    {
        $this->c->W( pack( "lllllc", 17, IPC::SP, $this->id, 41, $Index, $value ? 1 : 0 ) )->T();
    }
    public function getStampHOffset( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 42, $Index ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampHOffset( $Index, $value )
    {
        $this->c->W( pack( "llllld", 24, IPC::SP, $this->id, 42, $Index, $value ) )->T();
    }
    public function getStampVOffset( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 43, $Index ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampVOffset( $Index, $value )
    {
        $this->c->W( pack( "llllld", 24, IPC::SP, $this->id, 43, $Index, $value ) )->T();
    }
    public function getStampTransparentColor( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 44, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampTransparentColor( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 44, $Index, $value ) )->T();
    }
    public function getStampZoom( $Index )
    {
        $this->c->W( pack( "lllll", 16, IPC::GP, $this->id, 45, $Index ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStampZoom( $Index, $value )
    {
        $this->c->W( pack( "llllll", 20, IPC::SP, $this->id, 45, $Index, $value ) )->T();
    }
    public function getMetaData( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 46 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMetaData( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 46, $value ? 1 : 0 ) )->T();
    }
    public function getMetaDataCreator( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 47 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setMetaDataCreator( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 47, strlen( $value ), $value ) )->T();
    }
    public function getMetaDataTitle( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 48 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setMetaDataTitle( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 48, strlen( $value ), $value ) )->T();
    }
    public function getMetaDataAuthor( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 49 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setMetaDataAuthor( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 49, strlen( $value ), $value ) )->T();
    }
    public function getMetaDataSubject( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setMetaDataSubject( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 50, strlen( $value ), $value ) )->T();
    }
    public function getMetaDataKeywords( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setMetaDataKeywords( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 51, strlen( $value ), $value ) )->T();
    }
    public function getFolderDefaultOutputPath( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFolderDefaultOutputPath( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 52, $value ) )->T();
    }
    public function getFolderSpecifiedOutputPath( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 53 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setFolderSpecifiedOutputPath( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 53, strlen( $value ), $value ) )->T();
    }
    public function getFolderRememberOutputPath( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFolderRememberOutputPath( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 54, $value ? 1 : 0 ) )->T();
    }
    public function getUiAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setUiAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 55, $value ? 1 : 0 ) )->T();
    }
    public function getUiFileDialog( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setUiFileDialog( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 56, $value ? 1 : 0 ) )->T();
    }
    public function getUiPropertiesDialog( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setUiPropertiesDialog( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 57, $value ? 1 : 0 ) )->T();
    }
    public function getSignature( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 58 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSignature( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 58, $value ? 1 : 0 ) )->T();
    }
    public function getSignatureDigitalIDFileName( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 59 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSignatureDigitalIDFileName( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 59, strlen( $value ), $value ) )->T();
    }
    public function getSignatureInfoContact( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 60 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSignatureInfoContact( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 60, strlen( $value ), $value ) )->T();
    }
    public function getSignatureInfoLocation( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSignatureInfoLocation( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 61, strlen( $value ), $value ) )->T();
    }
    public function getSignatureInfoPurpose( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSignatureInfoPurpose( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 62, strlen( $value ), $value ) )->T();
    }
    public function getSignatureImage( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSignatureImage( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 63, $value ? 1 : 0 ) )->T();
    }
    public function getSignatureImageFileName( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 64 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setSignatureImageFileName( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 64, strlen( $value ), $value ) )->T();
    }
    public function getSignatureImageZoom( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSignatureImageZoom( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 65, $value ) )->T();
    }
    public function getSignatureImagePosLeft( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSignatureImagePosLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 66, $value ) )->T();
    }
    public function getSignatureImagePosTop( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 67 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSignatureImagePosTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 67, $value ) )->T();
    }
    public function SignatureCreateDigitalID( $IDFileName, $IDPassword, $Name, $Country, $OrganizationName, $OrganizationUnit, $Email, $KeyLength )
    {
        $this->c->W( pack( "llllla*la*la*la*la*la*la*l", 44 + strlen( $IDFileName ) + strlen( $IDPassword ) + strlen( $Name ) + strlen( $Country ) + strlen( $OrganizationName ) + strlen( $OrganizationUnit ) + strlen( $Email ), IPC::CM, $this->id, 68, strlen( $IDFileName ), $IDFileName, strlen( $IDPassword ), $IDPassword, strlen( $Name ), $Name, strlen( $Country ), $Country, strlen( $OrganizationName ), $OrganizationName, strlen( $OrganizationUnit ), $OrganizationUnit, strlen( $Email ), $Email, $KeyLength ) )->T();
    }
    public function SignatureExportCertificate( $CertificateFileName, $IDFileName, $IDPassword )
    {
        $this->c->W( pack( "llllla*la*la*", 24 + strlen( $CertificateFileName ) + strlen( $IDFileName ) + strlen( $IDPassword ), IPC::CM, $this->id, 69, strlen( $CertificateFileName ), $CertificateFileName, strlen( $IDFileName ), $IDFileName, strlen( $IDPassword ), $IDPassword ) )->T();
    }
    public function getFontEmbedAsType0( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 70 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFontEmbedAsType0( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 70, $value ? 1 : 0 ) )->T();
    }
    public function getImageQuality( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 71 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setImageQuality( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 71, $value ) )->T();
    }
    public function getViewerPanel( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 72 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerPanel( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 72, $value ) )->T();
    }
    public function getViewerPageLayout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 73 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerPageLayout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 73, $value ) )->T();
    }
    public function getViewerMagnification( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 74 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerMagnification( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 74, $value ) )->T();
    }
    public function getViewerPrintScaling( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 75 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerPrintScaling( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 75, $value ) )->T();
    }
    public function getViewerHideMenuBar( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 76 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerHideMenuBar( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 76, $value ? 1 : 0 ) )->T();
    }
    public function getViewerHideToolBar( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 77 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerHideToolBar( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 77, $value ? 1 : 0 ) )->T();
    }
    public function getViewerHideWinControls( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 78 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setViewerHideWinControls( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 78, $value ? 1 : 0 ) )->T();
    }
    public function getStandardPdfAConformance( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 79 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStandardPdfAConformance( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 79, $value ) )->T();
    }
    public function getStandardPdfXConformance( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 80 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setStandardPdfXConformance( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 80, $value ) )->T();
    }
    public function getStandardCmykProfile( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 81 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setStandardCmykProfile( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 81, strlen( $value ), $value ) )->T();
    }
    protected $c;
    protected $id;
}
class PrinterSetting extends PDFSetting
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getLayoutPaperSize( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 201 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setLayoutPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 201, $value ) )->T();
    }
    public function getLayoutPaperOrientation( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 202 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setLayoutPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 202, $value ) )->T();
    }
    public function getLayoutGraphicResolution( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 203 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setLayoutGraphicResolution( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 203, $value ) )->T();
    }
    public function getLayoutScaling( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 204 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setLayoutScaling( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 204, $value ) )->T();
    }
    public function CreatePaper( $PaperName, $Width, $Height )
    {
        $this->c->W( pack( "llllla*dd", 32 + strlen( $PaperName ), IPC::CM, $this->id, 205, strlen( $PaperName ), $PaperName, $Width, $Height ) )->T();
    }
    public function DeletePaper( $PaperName )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $PaperName ), IPC::CM, $this->id, 206, strlen( $PaperName ), $PaperName ) )->T();
    }
    public function GetPaperSize( $PaperName )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $PaperName ), IPC::CM, $this->id, 207, strlen( $PaperName ), $PaperName ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function IsPaperAvailable( $PaperName )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $PaperName ), IPC::CM, $this->id, 208, strlen( $PaperName ), $PaperName ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function getLayoutPrintColorType( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 209 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setLayoutPrintColorType( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 209, $value ) )->T();
    }
}
class OutlookPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getQueueWaitTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setQueueWaitTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 50, $value ) )->T();
    }
    public function getConvertAttachments( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertAttachments( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 51, $value ? 1 : 0 ) )->T();
    }
    public function getAttachAttachments( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setAttachAttachments( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 52, $value ? 1 : 0 ) )->T();
    }
}
class WordPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 50, $value ? 1 : 0 ) )->T();
    }
    public function getConvertBookmarks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertBookmarks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 51, $value ? 1 : 0 ) )->T();
    }
    public function getBookmarkDepth( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setBookmarkDepth( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 52, strlen( $value ), $value ) )->T();
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 57, $value ) )->T();
    }
    public function setPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 58, $value ) )->T();
    }
    public function setPageWidth( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 59, $value ) )->T();
    }
    public function setPageHeight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 60, $value ) )->T();
    }
    public function setDocumentPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 61, strlen( $value ), $value ) )->T();
    }
    public function getAddInTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setAddInTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 62, $value ) )->T();
    }
    public function getEnableAutoMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableAutoMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 63, $value ? 1 : 0 ) )->T();
    }
    public function getPrintInBackground( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 64 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintInBackground( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 64, $value ? 1 : 0 ) )->T();
    }
    public function getPrintRevisions( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintRevisions( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 65, $value ? 1 : 0 ) )->T();
    }
    public function getOpenAndRepair( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOpenAndRepair( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 66, $value ? 1 : 0 ) )->T();
    }
    public function getReadOnly( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 67 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setReadOnly( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 67, $value ? 1 : 0 ) )->T();
    }
    public function getFitInvalidMargins( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 68 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFitInvalidMargins( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 68, $value ? 1 : 0 ) )->T();
    }
    public function getInteractiveUserSession( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 69 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setInteractiveUserSession( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 69, $value ? 1 : 0 ) )->T();
    }
    public function getRevisionMode( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 70 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setRevisionMode( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 70, $value ) )->T();
    }
    public function getHighQualityModeForGraphics( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 71 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setHighQualityModeForGraphics( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 71, $value ? 1 : 0 ) )->T();
    }
    public function getConvertHyperlinksMethod( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 72 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinksMethod( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 72, $value ) )->T();
    }
    public function getEncoding( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 73 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEncoding( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 73, $value ) )->T();
    }
    public function getDisplayAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 74 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 74, $value ? 1 : 0 ) )->T();
    }
}
class WordPrintJobEx extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 50, $value ? 1 : 0 ) )->T();
    }
    public function getConvertBookmarks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertBookmarks( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 57, $value ) )->T();
    }
    public function setPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 58, $value ) )->T();
    }
    public function setPageWidth( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 59, $value ) )->T();
    }
    public function setPageHeight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 60, $value ) )->T();
    }
    public function setDocumentPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 61, strlen( $value ), $value ) )->T();
    }
    public function getEnableAutoMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableAutoMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 63, $value ? 1 : 0 ) )->T();
    }
    public function getOpenAndRepair( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOpenAndRepair( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 66, $value ? 1 : 0 ) )->T();
    }
    public function getReadOnly( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 67 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setReadOnly( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 67, $value ? 1 : 0 ) )->T();
    }
    public function getOptimizeForScreen( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 70 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOptimizeForScreen( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 70, $value ? 1 : 0 ) )->T();
    }
    public function getIncludeDocProps( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 71 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIncludeDocProps( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 71, $value ? 1 : 0 ) )->T();
    }
    public function getIncludeDocumentMarkups( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 72 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIncludeDocumentMarkups( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 72, $value ? 1 : 0 ) )->T();
    }
    public function getBitmapNonEmbeddableFonts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 73 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setBitmapNonEmbeddableFonts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 73, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficePDF( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 74 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficePDF( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 74, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeStandardPDFA( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 75 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeStandardPDFA( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 75, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeDocStructureTags( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 76 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeDocStructureTags( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 76, $value ? 1 : 0 ) )->T();
    }
    public function getWordTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 77 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWordTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 77, $value ) )->T();
    }
    public function getRevisionMode( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 78 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setRevisionMode( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 78, $value ) )->T();
    }
    public function getPreserveAttachments( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 79 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPreserveAttachments( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 79, $value ? 1 : 0 ) )->T();
    }
    public function getEncoding( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 80 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEncoding( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 80, $value ) )->T();
    }
    public function getDisplayAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 81 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 81, $value ? 1 : 0 ) )->T();
    }
}
class ExcelPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getPrintAllSheets( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintAllSheets( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 50, $value ? 1 : 0 ) )->T();
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 52, $value ) )->T();
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function setPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function setDocumentPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 57, strlen( $value ), $value ) )->T();
    }
    public function setZoom( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 58, $value ) )->T();
    }
    public function setFitToPagesWide( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 59, $value ) )->T();
    }
    public function setFitToPagesTall( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 60, $value ) )->T();
    }
    public function getReadOnly( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setReadOnly( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 61, $value ? 1 : 0 ) )->T();
    }
    public function getEnableAutoMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableAutoMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 62, $value ? 1 : 0 ) )->T();
    }
    public function getInteractiveUserSession( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setInteractiveUserSession( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 63, $value ? 1 : 0 ) )->T();
    }
    public function getHighQualityModeForGraphics( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 64 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setHighQualityModeForGraphics( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 64, $value ? 1 : 0 ) )->T();
    }
    public function getDisplayAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 65, $value ? 1 : 0 ) )->T();
    }
    public function getPrintEachSheetThenMerge( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintEachSheetThenMerge( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 66, $value ? 1 : 0 ) )->T();
    }
}
class ExcelPrintJobEx extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getPrintAllSheets( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintAllSheets( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 50, $value ? 1 : 0 ) )->T();
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 52, $value ) )->T();
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function setPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function setDocumentPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 57, strlen( $value ), $value ) )->T();
    }
    public function setZoom( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 58, $value ) )->T();
    }
    public function setFitToPagesWide( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 59, $value ) )->T();
    }
    public function setFitToPagesTall( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 60, $value ) )->T();
    }
    public function getReadOnly( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setReadOnly( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 61, $value ? 1 : 0 ) )->T();
    }
    public function getEnableAutoMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableAutoMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 62, $value ? 1 : 0 ) )->T();
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 63, $value ? 1 : 0 ) )->T();
    }
    public function getIncludeDocProps( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 64 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIncludeDocProps( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 64, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficePDF( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficePDF( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 65, $value ? 1 : 0 ) )->T();
    }
    public function getExcelTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setExcelTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 66, $value ) )->T();
    }
    public function getIgnorePrintAreas( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 67 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIgnorePrintAreas( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 67, $value ? 1 : 0 ) )->T();
    }
    public function getOptimizeForScreen( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 68 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOptimizeForScreen( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 68, $value ? 1 : 0 ) )->T();
    }
    public function getDisplayAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 69 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 69, $value ? 1 : 0 ) )->T();
    }
}
class PowerPointPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getPrintColorType( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintColorType( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 50, $value ) )->T();
    }
    public function getQueueWaitTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setQueueWaitTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function getFitToPage( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFitToPage( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 52, $value ? 1 : 0 ) )->T();
    }
    public function getFrameSlides( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 53 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFrameSlides( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 53, $value ? 1 : 0 ) )->T();
    }
    public function getHandoutOrder( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setHandoutOrder( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function getOutputType( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOutputType( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function getInteractiveUserSession( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setInteractiveUserSession( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 56, $value ? 1 : 0 ) )->T();
    }
    public function getEnableMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 57, $value ? 1 : 0 ) )->T();
    }
    public function getEnableConversionRequestQueueing( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 58 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableConversionRequestQueueing( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 58, $value ? 1 : 0 ) )->T();
    }
    public function getHighQualityModeForGraphics( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 59 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setHighQualityModeForGraphics( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 59, $value ? 1 : 0 ) )->T();
    }
    public function getDisplayAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 60 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 60, $value ? 1 : 0 ) )->T();
    }
}
class PowerPointPrintJobEx extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getPrintColorType( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintColorType( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 50, $value ) )->T();
    }
    public function getQueueWaitTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setQueueWaitTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function getFrameSlides( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 53 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setFrameSlides( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 53, $value ? 1 : 0 ) )->T();
    }
    public function getHandoutOrder( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setHandoutOrder( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function getOutputType( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOutputType( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function getNativeOfficePDF( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficePDF( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 56, $value ? 1 : 0 ) )->T();
    }
    public function getIncludeDocProps( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIncludeDocProps( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 57, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeDocStructureTags( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 58 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeDocStructureTags( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 58, $value ? 1 : 0 ) )->T();
    }
    public function getBitmapNonEmbeddableFonts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 59 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setBitmapNonEmbeddableFonts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 59, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeStandardPDFA( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 60 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeStandardPDFA( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 60, $value ? 1 : 0 ) )->T();
    }
    public function getOptimizeForScreen( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOptimizeForScreen( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 61, $value ? 1 : 0 ) )->T();
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 62, $value ? 1 : 0 ) )->T();
    }
    public function getPowerPointTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPowerPointTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 63, $value ) )->T();
    }
    public function getEnableMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 64 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 64, $value ? 1 : 0 ) )->T();
    }
    public function getEnableConversionRequestQueueing( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableConversionRequestQueueing( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 65, $value ? 1 : 0 ) )->T();
    }
    public function getDisplayAlerts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayAlerts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 66, $value ? 1 : 0 ) )->T();
    }
}
class VisioPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function setPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 52, $value ) )->T();
    }
    public function setPrintScale( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function getInteractiveUserSession( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setInteractiveUserSession( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 54, $value ? 1 : 0 ) )->T();
    }
    public function getEnableMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 55, $value ? 1 : 0 ) )->T();
    }
    public function getOpenDocumentCopy( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOpenDocumentCopy( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 56, $value ? 1 : 0 ) )->T();
    }
}
class VisioPrintJobEx extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function setPaperSize( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 52, $value ) )->T();
    }
    public function setPrintScale( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function getNativeOfficePDF( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficePDF( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 54, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeStandardPDFA( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeStandardPDFA( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 55, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeDocStructureTags( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeDocStructureTags( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 56, $value ? 1 : 0 ) )->T();
    }
    public function getIncludeDocProps( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIncludeDocProps( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 57, $value ? 1 : 0 ) )->T();
    }
    public function getOptimizeForScreen( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 58 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOptimizeForScreen( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 58, $value ? 1 : 0 ) )->T();
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 59 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 59, $value ? 1 : 0 ) )->T();
    }
    public function getVisioTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 60 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setVisioTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 60, $value ) )->T();
    }
    public function getEnableMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 61, $value ? 1 : 0 ) )->T();
    }
    public function getOpenDocumentCopy( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setOpenDocumentCopy( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 62, $value ? 1 : 0 ) )->T();
    }
}
class OpenOfficePrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getConvertBookmarks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertBookmarks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 50, $value ? 1 : 0 ) )->T();
    }
    public function getProduceDocStructureTags( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setProduceDocStructureTags( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 51, $value ? 1 : 0 ) )->T();
    }
    public function getConvertFormFields( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertFormFields( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 52, $value ? 1 : 0 ) )->T();
    }
    public function getConvertNotes( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 53 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertNotes( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 53, $value ? 1 : 0 ) )->T();
    }
    public function getSkipEmptyPages( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSkipEmptyPages( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 54, $value ? 1 : 0 ) )->T();
    }
    public function getProcessPooling( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setProcessPooling( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 55, $value ? 1 : 0 ) )->T();
    }
}
class IEPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getIESetting( )
    {
        if ( !$this->m_IESetting ) {
            $this->m_IESetting = new IESetting( $this->c, 17 );
        }
        return $this->m_IESetting;
    }
    public function getWaitTimeAfterPageIsLoaded( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWaitTimeAfterPageIsLoaded( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function setHeader( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 52, strlen( $value ), $value ) )->T();
    }
    public function setFooter( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 53, strlen( $value ), $value ) )->T();
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 57, $value ) )->T();
    }
    public function setPaperOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 58, $value ) )->T();
    }
    public function getResumeOnError( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 59 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setResumeOnError( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 59, $value ? 1 : 0 ) )->T();
    }
    public function getIE8Emulation( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 60 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIE8Emulation( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 60, $value ? 1 : 0 ) )->T();
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 61, $value ? 1 : 0 ) )->T();
    }
    private $m_IESetting = null;
}
class IESetting
{
    public function __construct( $c, $id )
    {
        $this->c  = $c;
        $this->id = $id;
    }
    public function Save( )
    {
        $this->c->W( pack( "llll", 12, IPC::CM, $this->id, 1 ) )->T();
    }
    public function getHeader( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 2 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setHeader( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 2, strlen( $value ), $value ) )->T();
    }
    public function getFooter( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 3 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setFooter( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 3, strlen( $value ), $value ) )->T();
    }
    public function getMarginLeft( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 4 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 4, $value ) )->T();
    }
    public function getMarginTop( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 5 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 5, $value ) )->T();
    }
    public function getMarginRight( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 6 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 6, $value ) )->T();
    }
    public function getMarginBottom( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 7 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 7, $value ) )->T();
    }
    public function getPrintBGColor( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 8 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintBGColor( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 8, $value ? 1 : 0 ) )->T();
    }
    public function getDisableScriptDebugger( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 9 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisableScriptDebugger( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 9, $value ? 1 : 0 ) )->T();
    }
    public function getDisplayErrorDialogOnEveryError( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 10 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayErrorDialogOnEveryError( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 10, $value ? 1 : 0 ) )->T();
    }
    public function getShrinkToFit( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 11 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setShrinkToFit( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 11, $value ? 1 : 0 ) )->T();
    }
    protected $c;
    protected $id;
}
class IEExtendedPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getIEExtendedSetting( )
    {
        if ( !$this->m_IEExtendedSetting ) {
            $this->m_IEExtendedSetting = new IEExtendedSetting( $this->c, 19 );
        }
        return $this->m_IEExtendedSetting;
    }
    public function getWaitTimeAfterPageIsLoaded( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWaitTimeAfterPageIsLoaded( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function getMarginLeft( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function getMarginTop( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function getMarginRight( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function getMarginBottom( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 57, $value ) )->T();
    }
    public function getResumeOnError( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 59 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setResumeOnError( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 59, $value ? 1 : 0 ) )->T();
    }
    public function getAutoAdjustPaperSize( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 60 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setAutoAdjustPaperSize( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 60, $value ? 1 : 0 ) )->T();
    }
    public function getContentOrientation( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setContentOrientation( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 61, $value ) )->T();
    }
    public function getApplyBGColorToPaper( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setApplyBGColorToPaper( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 62, $value ? 1 : 0 ) )->T();
    }
    public function setPageWidth( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 63, $value ) )->T();
    }
    public function setPageHeight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 64, $value ) )->T();
    }
    public function setResolution( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 65, $value ) )->T();
    }
    public function getResolution( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setHorizontalStitching( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 66, $value ? 1 : 0 ) )->T();
    }
    public function getHorizontalStitching( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setUse64bitIE( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 67, $value ? 1 : 0 ) )->T();
    }
    public function getUse64bitIE( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 67 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    private $m_IEExtendedSetting = null;
}
class IEExtendedSetting
{
    public function __construct( $c, $id )
    {
        $this->c  = $c;
        $this->id = $id;
    }
    public function Save( )
    {
        $this->c->W( pack( "llll", 12, IPC::CM, $this->id, 1 ) )->T();
    }
    public function getDisableScriptDebugger( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 9 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisableScriptDebugger( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 9, $value ? 1 : 0 ) )->T();
    }
    public function getDisplayErrorDialogOnEveryError( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 10 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisplayErrorDialogOnEveryError( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 10, $value ? 1 : 0 ) )->T();
    }
    protected $c;
    protected $id;
}
class HTMLPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function setPageWidth( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 50, $value ) )->T();
    }
    public function setPageHeight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 51, $value ) )->T();
    }
    public function getMarginLeft( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginLeft( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 52, $value ) )->T();
    }
    public function getMarginTop( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 53 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginTop( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 53, $value ) )->T();
    }
    public function getMarginRight( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginRight( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 54, $value ) )->T();
    }
    public function getMarginBottom( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setMarginBottom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 55, $value ) )->T();
    }
    public function getWaitTimeAfterPageIsLoaded( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setWaitTimeAfterPageIsLoaded( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function getPrintBGColor( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintBGColor( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 57, $value ? 1 : 0 ) )->T();
    }
    public function getPrintView( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 58 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintView( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 58, $value ? 1 : 0 ) )->T();
    }
    public function setHTTPUsername( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 59, strlen( $value ), $value ) )->T();
    }
    public function setHTTPPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 60, strlen( $value ), $value ) )->T();
    }
    public function getSmartShrinking( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 61 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setSmartShrinking( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 61, $value ? 1 : 0 ) )->T();
    }
    public function getZoom( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 62 ) )->T();
        $up  = unpack( "da", $this->c->R( 8 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setZoom( $value )
    {
        $this->c->W( pack( "lllld", 20, IPC::SP, $this->id, 62, $value ) )->T();
    }
    public function getProxy( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 63 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setProxy( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 63, strlen( $value ), $value ) )->T();
    }
    public function getEncoding( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 64 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setEncoding( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 64, strlen( $value ), $value ) )->T();
    }
    public function getAutoAdjustPaperSize( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 65 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setAutoAdjustPaperSize( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 65, $value ? 1 : 0 ) )->T();
    }
    public function getRenderingEngine( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 66 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setRenderingEngine( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 66, $value ) )->T();
    }
    public function getIgnoreHTTPSErrors( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 67 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIgnoreHTTPSErrors( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 67, $value ? 1 : 0 ) )->T();
    }
    public function getDisableSameOriginPolicy( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 68 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setDisableSameOriginPolicy( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 68, $value ? 1 : 0 ) )->T();
    }
    public function getBypassCSP( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 69 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setBypassCSP( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 69, $value ? 1 : 0 ) )->T();
    }
}
class GenericPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getHostApplication( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setHostApplication( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 50, strlen( $value ), $value ) )->T();
    }
    public function getHostArguments( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setHostArguments( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 51, strlen( $value ), $value ) )->T();
    }
}
class PublisherPrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getPrintGraphics( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPrintGraphics( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 50, $value ) )->T();
    }
    public function getInteractiveUserSession( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setInteractiveUserSession( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 51, $value ? 1 : 0 ) )->T();
    }
    public function getEnableMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 52, $value ? 1 : 0 ) )->T();
    }
}
class PublisherPrintJobEx extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
    public function getNativeOfficePDF( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 50 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficePDF( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 50, $value ? 1 : 0 ) )->T();
    }
    public function getIncludeDocProps( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 51 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setIncludeDocProps( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 51, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeDocStructureTags( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 52 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeDocStructureTags( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 52, $value ? 1 : 0 ) )->T();
    }
    public function getBitmapNonEmbeddableFonts( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 53 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setBitmapNonEmbeddableFonts( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 53, $value ? 1 : 0 ) )->T();
    }
    public function getNativeOfficeStandardPDFA( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 54 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setNativeOfficeStandardPDFA( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 54, $value ? 1 : 0 ) )->T();
    }
    public function getConvertHyperlinks( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 55 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setConvertHyperlinks( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 55, $value ? 1 : 0 ) )->T();
    }
    public function getPublisherTimeout( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 56 ) )->T();
        $up  = unpack( "la", $this->c->R( 4 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setPublisherTimeout( $value )
    {
        $this->c->W( pack( "lllll", 16, IPC::SP, $this->id, 56, $value ) )->T();
    }
    public function getEnableMacros( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 57 ) )->T();
        $up  = unpack( "ca", $this->c->R( 1 ) );
        $ret = $up[ "a" ];
        return $ret;
    }
    public function setEnableMacros( $value )
    {
        $this->c->W( pack( "llllc", 13, IPC::SP, $this->id, 57, $value ? 1 : 0 ) )->T();
    }
}
class ImagePrintJob extends PrintJob
{
    public function __construct( $c, $id )
    {
        parent::__construct( $c, $id );
    }
}
final class PrinterMonitor
{
    public function __construct( $printer_c, $id )
    {
        $this->c  = $printer_c;
        $this->id = $id;
    }
    public function setSignatureDigitalIDPassword( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 1, strlen( $value ), $value ) )->T();
    }
    public function setBannerMessage( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 2, strlen( $value ), $value ) )->T();
    }
    public function getBannerMessage( )
    {
        $this->c->W( pack( "llll", 12, IPC::GP, $this->id, 2 ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function GetConversionResultMessage( $Result )
    {
        $this->c->W( pack( "lllll", 16, IPC::CM, $this->id, 3, $Result ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function GetPrinterResultMessage( $Result )
    {
        $this->c->W( pack( "lllll", 16, IPC::CM, $this->id, 4, $Result ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function setOutputFileName( $value )
    {
        $this->c->W( pack( "llllla*", 16 + strlen( $value ), IPC::SP, $this->id, 5, strlen( $value ), $value ) )->T();
    }
    protected $c;
    protected $id;
}
class PrintJobMonitor
{
    public function __construct( $c, $id )
    {
        $this->c                  = $c;
        $this->id                 = $id;
        $this->c->PrintJobMonitor = $this;
    }
    public $OnPrinterInit = null;
    public $OnPrinterUpdate = null;
    public $OnPrinterStart = null;
    public $OnPageStart = null;
    public $OnPrinterEnd = null;
    public function GetConversionResultMessage( $Result )
    {
        $this->c->W( pack( "lllll", 16, IPC::CM, $this->id, 1, $Result ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    public function GetPrinterResultMessage( $Result )
    {
        $this->c->W( pack( "lllll", 16, IPC::CM, $this->id, 2, $Result ) )->T();
        $up       = unpack( "la", $this->c->R( 4 ) );
        $retBytes = $up[ "a" ];
        $ret      = $this->c->R( $retBytes );
        return $ret;
    }
    protected $c;
    protected $id;
}
?>
