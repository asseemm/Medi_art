<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/contacts.htm */
class __TwigTemplate_21704f527fa64aa17929ef2236fefe7f3f56d7f07e27caa7608377ca137a6894 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"contacts\" id=\"contact\">
    <div class=\"contact-cont\">
      <div class=\"map\">
        <div style=\"position:relative;overflow:hidden;\"><a href=\"https://yandex.kz/maps/163/astana/?utm_medium=mapframe&utm_source=maps\" style=\"color:#eee;font-size:12px;position:absolute;top:0px;\">Астана</a><a href=\"https://yandex.kz/maps/163/astana/house/Y0gYcgFhTUYHQFtrfX11dH5jZQ==/?ll=71.462529%2C51.144322&utm_medium=mapframe&utm_source=maps&z=17.54\" style=\"color:#eee;font-size:12px;position:absolute;top:14px;\">Проспект Тауелсиздик, 20/1 — Яндекс Карты</a><iframe src=\"https://yandex.kz/map-widget/v1/?ll=71.462529%2C51.144322&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg2NzM0NzIyMBJN0prQsNC30LDSm9GB0YLQsNC9LCDQkNGB0YLQsNC90LAsINCi05nRg9C10LvRgdGW0LfQtNGW0Log0LTQsNKj0pPRi9C70YssIDIwLzEiCg1A7I5CFa-UTEI%2C&z=17.54\" width=\"560\" height=\"400\" frameborder=\"1\" allowfullscreen=\"true\" style=\"position:relative;\"></iframe></div>
      </div>
      <div class=\"cont-info\">
        <h1>ЮР/ФАКТИЧЕСКИЙ АДРЕС:</h1>
        <p>Казахстан, г. Астана, пр. <br> Тауельсыздик, 20/1</p>
        <div class=\"line\"></div>
        <h1>телефон:</h1>
        <p>+7 (777) 955-59-95</p>
        <div class=\"line\"></div>
        <h1>электронная почта:</h1>
        <p>example@mail.kz</p>
        <div class=\"line\"></div>
        <h1>Время работы:</h1>
        <p>Пн-Пт: с 08.30 до 19.00 <br>
          Сб: с 08.30 до 16.00 <br>
          Вс: Выходной</p>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/contacts.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contacts\" id=\"contact\">
    <div class=\"contact-cont\">
      <div class=\"map\">
        <div style=\"position:relative;overflow:hidden;\"><a href=\"https://yandex.kz/maps/163/astana/?utm_medium=mapframe&utm_source=maps\" style=\"color:#eee;font-size:12px;position:absolute;top:0px;\">Астана</a><a href=\"https://yandex.kz/maps/163/astana/house/Y0gYcgFhTUYHQFtrfX11dH5jZQ==/?ll=71.462529%2C51.144322&utm_medium=mapframe&utm_source=maps&z=17.54\" style=\"color:#eee;font-size:12px;position:absolute;top:14px;\">Проспект Тауелсиздик, 20/1 — Яндекс Карты</a><iframe src=\"https://yandex.kz/map-widget/v1/?ll=71.462529%2C51.144322&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg2NzM0NzIyMBJN0prQsNC30LDSm9GB0YLQsNC9LCDQkNGB0YLQsNC90LAsINCi05nRg9C10LvRgdGW0LfQtNGW0Log0LTQsNKj0pPRi9C70YssIDIwLzEiCg1A7I5CFa-UTEI%2C&z=17.54\" width=\"560\" height=\"400\" frameborder=\"1\" allowfullscreen=\"true\" style=\"position:relative;\"></iframe></div>
      </div>
      <div class=\"cont-info\">
        <h1>ЮР/ФАКТИЧЕСКИЙ АДРЕС:</h1>
        <p>Казахстан, г. Астана, пр. <br> Тауельсыздик, 20/1</p>
        <div class=\"line\"></div>
        <h1>телефон:</h1>
        <p>+7 (777) 955-59-95</p>
        <div class=\"line\"></div>
        <h1>электронная почта:</h1>
        <p>example@mail.kz</p>
        <div class=\"line\"></div>
        <h1>Время работы:</h1>
        <p>Пн-Пт: с 08.30 до 19.00 <br>
          Сб: с 08.30 до 16.00 <br>
          Вс: Выходной</p>
      </div>
    </div>
</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/contacts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
