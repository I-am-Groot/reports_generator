<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28483ad2cab6b3e7a67b86b214c53fd1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Svg\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sabberworm\\CSS' => 
            array (
                0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Config' => __DIR__ . '/../..' . '/src/config.php',
        'App\\DB' => __DIR__ . '/../..' . '/src/DB.php',
        'App\\Model' => __DIR__ . '/../..' . '/src/Model.php',
        'App\\ReportGenerator' => __DIR__ . '/../..' . '/src/ReportGenerator.php',
        'Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'Dompdf\\Adapter\\CPDF' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/CPDF.php',
        'Dompdf\\Adapter\\GD' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/GD.php',
        'Dompdf\\Adapter\\PDFLib' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/PDFLib.php',
        'Dompdf\\Autoloader' => __DIR__ . '/..' . '/dompdf/dompdf/src/Autoloader.php',
        'Dompdf\\Canvas' => __DIR__ . '/..' . '/dompdf/dompdf/src/Canvas.php',
        'Dompdf\\CanvasFactory' => __DIR__ . '/..' . '/dompdf/dompdf/src/CanvasFactory.php',
        'Dompdf\\Cellmap' => __DIR__ . '/..' . '/dompdf/dompdf/src/Cellmap.php',
        'Dompdf\\Css\\AttributeTranslator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/AttributeTranslator.php',
        'Dompdf\\Css\\Color' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Color.php',
        'Dompdf\\Css\\Style' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Style.php',
        'Dompdf\\Css\\Stylesheet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Stylesheet.php',
        'Dompdf\\Dompdf' => __DIR__ . '/..' . '/dompdf/dompdf/src/Dompdf.php',
        'Dompdf\\Exception' => __DIR__ . '/..' . '/dompdf/dompdf/src/Exception.php',
        'Dompdf\\Exception\\ImageException' => __DIR__ . '/..' . '/dompdf/dompdf/src/Exception/ImageException.php',
        'Dompdf\\FontMetrics' => __DIR__ . '/..' . '/dompdf/dompdf/src/FontMetrics.php',
        'Dompdf\\Frame' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame.php',
        'Dompdf\\FrameDecorator\\AbstractFrameDecorator' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/AbstractFrameDecorator.php',
        'Dompdf\\FrameDecorator\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Block.php',
        'Dompdf\\FrameDecorator\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Image.php',
        'Dompdf\\FrameDecorator\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Inline.php',
        'Dompdf\\FrameDecorator\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/ListBullet.php',
        'Dompdf\\FrameDecorator\\ListBulletImage' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/ListBulletImage.php',
        'Dompdf\\FrameDecorator\\NullFrameDecorator' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/NullFrameDecorator.php',
        'Dompdf\\FrameDecorator\\Page' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Page.php',
        'Dompdf\\FrameDecorator\\Table' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Table.php',
        'Dompdf\\FrameDecorator\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableCell.php',
        'Dompdf\\FrameDecorator\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableRow.php',
        'Dompdf\\FrameDecorator\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableRowGroup.php',
        'Dompdf\\FrameDecorator\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Text.php',
        'Dompdf\\FrameReflower\\AbstractFrameReflower' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/AbstractFrameReflower.php',
        'Dompdf\\FrameReflower\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Block.php',
        'Dompdf\\FrameReflower\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Image.php',
        'Dompdf\\FrameReflower\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Inline.php',
        'Dompdf\\FrameReflower\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/ListBullet.php',
        'Dompdf\\FrameReflower\\NullFrameReflower' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/NullFrameReflower.php',
        'Dompdf\\FrameReflower\\Page' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Page.php',
        'Dompdf\\FrameReflower\\Table' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Table.php',
        'Dompdf\\FrameReflower\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableCell.php',
        'Dompdf\\FrameReflower\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableRow.php',
        'Dompdf\\FrameReflower\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableRowGroup.php',
        'Dompdf\\FrameReflower\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Text.php',
        'Dompdf\\Frame\\Factory' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/Factory.php',
        'Dompdf\\Frame\\FrameList' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameList.php',
        'Dompdf\\Frame\\FrameListIterator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameListIterator.php',
        'Dompdf\\Frame\\FrameTree' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTree.php',
        'Dompdf\\Frame\\FrameTreeIterator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTreeIterator.php',
        'Dompdf\\Frame\\FrameTreeList' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTreeList.php',
        'Dompdf\\Helpers' => __DIR__ . '/..' . '/dompdf/dompdf/src/Helpers.php',
        'Dompdf\\Image\\Cache' => __DIR__ . '/..' . '/dompdf/dompdf/src/Image/Cache.php',
        'Dompdf\\JavascriptEmbedder' => __DIR__ . '/..' . '/dompdf/dompdf/src/JavascriptEmbedder.php',
        'Dompdf\\LineBox' => __DIR__ . '/..' . '/dompdf/dompdf/src/LineBox.php',
        'Dompdf\\Options' => __DIR__ . '/..' . '/dompdf/dompdf/src/Options.php',
        'Dompdf\\PhpEvaluator' => __DIR__ . '/..' . '/dompdf/dompdf/src/PhpEvaluator.php',
        'Dompdf\\Positioner\\Absolute' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Absolute.php',
        'Dompdf\\Positioner\\AbstractPositioner' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/AbstractPositioner.php',
        'Dompdf\\Positioner\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Block.php',
        'Dompdf\\Positioner\\Fixed' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Fixed.php',
        'Dompdf\\Positioner\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Inline.php',
        'Dompdf\\Positioner\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/ListBullet.php',
        'Dompdf\\Positioner\\NullPositioner' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/NullPositioner.php',
        'Dompdf\\Positioner\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/TableCell.php',
        'Dompdf\\Positioner\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/TableRow.php',
        'Dompdf\\Renderer' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer.php',
        'Dompdf\\Renderer\\AbstractRenderer' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/AbstractRenderer.php',
        'Dompdf\\Renderer\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Block.php',
        'Dompdf\\Renderer\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Image.php',
        'Dompdf\\Renderer\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Inline.php',
        'Dompdf\\Renderer\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/ListBullet.php',
        'Dompdf\\Renderer\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/TableCell.php',
        'Dompdf\\Renderer\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/TableRowGroup.php',
        'Dompdf\\Renderer\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Text.php',
        'FontLib\\AdobeFontMetrics' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/AdobeFontMetrics.php',
        'FontLib\\Autoloader' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Autoloader.php',
        'FontLib\\BinaryStream' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/BinaryStream.php',
        'FontLib\\EOT\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EOT/File.php',
        'FontLib\\EOT\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EOT/Header.php',
        'FontLib\\EncodingMap' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EncodingMap.php',
        'FontLib\\Exception\\FontNotFoundException' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Exception/FontNotFoundException.php',
        'FontLib\\Font' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Font.php',
        'FontLib\\Glyph\\Outline' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/Outline.php',
        'FontLib\\Glyph\\OutlineComponent' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComponent.php',
        'FontLib\\Glyph\\OutlineComposite' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComposite.php',
        'FontLib\\Glyph\\OutlineSimple' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineSimple.php',
        'FontLib\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Header.php',
        'FontLib\\OpenType\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/OpenType/File.php',
        'FontLib\\OpenType\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/OpenType/TableDirectoryEntry.php',
        'FontLib\\Table\\DirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/DirectoryEntry.php',
        'FontLib\\Table\\Table' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Table.php',
        'FontLib\\Table\\Type\\cmap' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/cmap.php',
        'FontLib\\Table\\Type\\glyf' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/glyf.php',
        'FontLib\\Table\\Type\\head' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/head.php',
        'FontLib\\Table\\Type\\hhea' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/hhea.php',
        'FontLib\\Table\\Type\\hmtx' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/hmtx.php',
        'FontLib\\Table\\Type\\kern' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/kern.php',
        'FontLib\\Table\\Type\\loca' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/loca.php',
        'FontLib\\Table\\Type\\maxp' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/maxp.php',
        'FontLib\\Table\\Type\\name' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/name.php',
        'FontLib\\Table\\Type\\nameRecord' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/nameRecord.php',
        'FontLib\\Table\\Type\\os2' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/os2.php',
        'FontLib\\Table\\Type\\post' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/post.php',
        'FontLib\\TrueType\\Collection' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/Collection.php',
        'FontLib\\TrueType\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/File.php',
        'FontLib\\TrueType\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/Header.php',
        'FontLib\\TrueType\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/TableDirectoryEntry.php',
        'FontLib\\WOFF\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/File.php',
        'FontLib\\WOFF\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/Header.php',
        'FontLib\\WOFF\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/TableDirectoryEntry.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Sabberworm\\CSS\\CSSList\\AtRuleBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/AtRuleBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/CSSBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/CSSList.php',
        'Sabberworm\\CSS\\CSSList\\Document' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/Document.php',
        'Sabberworm\\CSS\\CSSList\\KeyFrame' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/KeyFrame.php',
        'Sabberworm\\CSS\\Comment\\Comment' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Comment/Comment.php',
        'Sabberworm\\CSS\\Comment\\Commentable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Comment/Commentable.php',
        'Sabberworm\\CSS\\OutputFormat' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/OutputFormat.php',
        'Sabberworm\\CSS\\OutputFormatter' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/OutputFormat.php',
        'Sabberworm\\CSS\\Parser' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parser.php',
        'Sabberworm\\CSS\\Parsing\\OutputException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/OutputException.php',
        'Sabberworm\\CSS\\Parsing\\ParserState' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/ParserState.php',
        'Sabberworm\\CSS\\Parsing\\SourceException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/SourceException.php',
        'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/UnexpectedTokenException.php',
        'Sabberworm\\CSS\\Property\\AtRule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/AtRule.php',
        'Sabberworm\\CSS\\Property\\CSSNamespace' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/CSSNamespace.php',
        'Sabberworm\\CSS\\Property\\Charset' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Charset.php',
        'Sabberworm\\CSS\\Property\\Import' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Import.php',
        'Sabberworm\\CSS\\Property\\Selector' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Selector.php',
        'Sabberworm\\CSS\\Renderable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Renderable.php',
        'Sabberworm\\CSS\\RuleSet\\AtRuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/AtRuleSet.php',
        'Sabberworm\\CSS\\RuleSet\\DeclarationBlock' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/DeclarationBlock.php',
        'Sabberworm\\CSS\\RuleSet\\RuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/RuleSet.php',
        'Sabberworm\\CSS\\Rule\\Rule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Rule/Rule.php',
        'Sabberworm\\CSS\\Settings' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Settings.php',
        'Sabberworm\\CSS\\Value\\CSSFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CSSFunction.php',
        'Sabberworm\\CSS\\Value\\CSSString' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CSSString.php',
        'Sabberworm\\CSS\\Value\\CalcFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CalcFunction.php',
        'Sabberworm\\CSS\\Value\\CalcRuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CalcRuleValueList.php',
        'Sabberworm\\CSS\\Value\\Color' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Color.php',
        'Sabberworm\\CSS\\Value\\LineName' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/LineName.php',
        'Sabberworm\\CSS\\Value\\PrimitiveValue' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/PrimitiveValue.php',
        'Sabberworm\\CSS\\Value\\RuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/RuleValueList.php',
        'Sabberworm\\CSS\\Value\\Size' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Size.php',
        'Sabberworm\\CSS\\Value\\URL' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/URL.php',
        'Sabberworm\\CSS\\Value\\Value' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Value.php',
        'Sabberworm\\CSS\\Value\\ValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/ValueList.php',
        'Svg\\DefaultStyle' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/DefaultStyle.php',
        'Svg\\Document' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Document.php',
        'Svg\\Gradient\\Stop' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Gradient/Stop.php',
        'Svg\\Style' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Style.php',
        'Svg\\Surface\\CPdf' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/CPdf.php',
        'Svg\\Surface\\SurfaceCpdf' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceCpdf.php',
        'Svg\\Surface\\SurfaceGmagick' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceGmagick.php',
        'Svg\\Surface\\SurfaceInterface' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceInterface.php',
        'Svg\\Surface\\SurfacePDFLib' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfacePDFLib.php',
        'Svg\\Tag\\AbstractTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/AbstractTag.php',
        'Svg\\Tag\\Anchor' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Anchor.php',
        'Svg\\Tag\\Circle' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Circle.php',
        'Svg\\Tag\\ClipPath' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/ClipPath.php',
        'Svg\\Tag\\Ellipse' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Ellipse.php',
        'Svg\\Tag\\Group' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Group.php',
        'Svg\\Tag\\Image' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Image.php',
        'Svg\\Tag\\Line' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Line.php',
        'Svg\\Tag\\LinearGradient' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/LinearGradient.php',
        'Svg\\Tag\\Path' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Path.php',
        'Svg\\Tag\\Polygon' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Polygon.php',
        'Svg\\Tag\\Polyline' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Polyline.php',
        'Svg\\Tag\\RadialGradient' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/RadialGradient.php',
        'Svg\\Tag\\Rect' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Rect.php',
        'Svg\\Tag\\Shape' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Shape.php',
        'Svg\\Tag\\Stop' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Stop.php',
        'Svg\\Tag\\StyleTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/StyleTag.php',
        'Svg\\Tag\\Text' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Text.php',
        'Svg\\Tag\\UseTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/UseTag.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28483ad2cab6b3e7a67b86b214c53fd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28483ad2cab6b3e7a67b86b214c53fd1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit28483ad2cab6b3e7a67b86b214c53fd1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit28483ad2cab6b3e7a67b86b214c53fd1::$classMap;

        }, null, ClassLoader::class);
    }
}
