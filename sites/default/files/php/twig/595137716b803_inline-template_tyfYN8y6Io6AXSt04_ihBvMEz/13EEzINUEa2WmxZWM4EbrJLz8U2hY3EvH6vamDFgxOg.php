<?php

/* {# inline_template_start #}{#

Description text for the Block Example.

#}

{% trans %}

<p>The Block Example provides three sample blocks which demonstrate the various block APIs. To experiment with the
blocks, enable and configure them on <a href="/dp8kus/admin/structure/block">the block admin page.</a></p>

{% endtrans %}
 */
class __TwigTemplate_306676fb63b703617c007a38ccb1da08ad140633ff27d9dc0b7e0f305c7d0325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("trans" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 6
        echo "
";
        // line 7
        echo t("<p>The Block Example provides three sample blocks which demonstrate the various block APIs. To experiment with the
blocks, enable and configure them on <a href=\"/dp8kus/admin/structure/block\">the block admin page.</a></p>", array());
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Block Example.

#}

{% trans %}

<p>The Block Example provides three sample blocks which demonstrate the various block APIs. To experiment with the
blocks, enable and configure them on <a href=\"/dp8kus/admin/structure/block\">the block admin page.</a></p>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  55 => 6,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{#

Description text for the Block Example.

#}

{% trans %}

<p>The Block Example provides three sample blocks which demonstrate the various block APIs. To experiment with the
blocks, enable and configure them on <a href=\"/dp8kus/admin/structure/block\">the block admin page.</a></p>

{% endtrans %}
";
    }
}
