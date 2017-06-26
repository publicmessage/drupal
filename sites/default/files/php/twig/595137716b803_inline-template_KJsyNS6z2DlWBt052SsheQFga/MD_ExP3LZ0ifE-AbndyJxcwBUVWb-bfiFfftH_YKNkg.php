<?php

/* {# inline_template_start #}{#
/**
 * @file
 * Contains the text of the page_example explanation page
 * /
#}

{% set page_example_simple = path('page_example_simple') %}
{% set page_example_arguments = path('page_example_arguments', {'first': 23, 'second': 56}) %}

{% trans %}
<p>The Page example module provides two pages, "simple" and "arguments".</p>
<p>The <a href={{ page_example_simple }}>simple page</a> just returns a renderable array for display.</p>
<p>The <a href={{ page_example_arguments }}>arguments page</a> takes two arguments and displays them, as in {{ page_example_arguments }}</p>
{% endtrans %}
 */
class __TwigTemplate_3ea77e7f5c919dd1b5b6aa6b5b3c2a6fc8e6bcdf162b515b8bc4c6eb01e308c0 extends Twig_Template
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
        $tags = array("set" => 8, "trans" => 11);
        $filters = array();
        $functions = array("path" => 8);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'trans'),
                array(),
                array('path')
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

        // line 7
        echo "
";
        // line 8
        $context["page_example_simple"] = $this->env->getExtension('drupal_core')->getPath("page_example_simple");
        // line 9
        $context["page_example_arguments"] = $this->env->getExtension('drupal_core')->getPath("page_example_arguments", array("first" => 23, "second" => 56));
        // line 10
        echo "
";
        // line 11
        echo t("<p>The Page example module provides two pages, \"simple\" and \"arguments\".</p>
<p>The <a href=@page_example_simple>simple page</a> just returns a renderable array for display.</p>
<p>The <a href=@page_example_arguments>arguments page</a> takes two arguments and displays them, as in @page_example_arguments</p>", array("@page_example_simple" =>         // line 13
(isset($context["page_example_simple"]) ? $context["page_example_simple"] : null), "@page_example_arguments" =>         // line 14
(isset($context["page_example_arguments"]) ? $context["page_example_arguments"] : null), "@page_example_arguments" => (isset($context["page_example_arguments"]) ? $context["page_example_arguments"] : null), ));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#
/**
 * @file
 * Contains the text of the page_example explanation page
 */
#}

{% set page_example_simple = path('page_example_simple') %}
{% set page_example_arguments = path('page_example_arguments', {'first': 23, 'second': 56}) %}

{% trans %}
<p>The Page example module provides two pages, \"simple\" and \"arguments\".</p>
<p>The <a href={{ page_example_simple }}>simple page</a> just returns a renderable array for display.</p>
<p>The <a href={{ page_example_arguments }}>arguments page</a> takes two arguments and displays them, as in {{ page_example_arguments }}</p>
{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  71 => 13,  68 => 11,  65 => 10,  63 => 9,  61 => 8,  58 => 7,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{#
/**
 * @file
 * Contains the text of the page_example explanation page
 */
#}

{% set page_example_simple = path('page_example_simple') %}
{% set page_example_arguments = path('page_example_arguments', {'first': 23, 'second': 56}) %}

{% trans %}
<p>The Page example module provides two pages, \"simple\" and \"arguments\".</p>
<p>The <a href={{ page_example_simple }}>simple page</a> just returns a renderable array for display.</p>
<p>The <a href={{ page_example_arguments }}>arguments page</a> takes two arguments and displays them, as in {{ page_example_arguments }}</p>
{% endtrans %}
";
    }
}
