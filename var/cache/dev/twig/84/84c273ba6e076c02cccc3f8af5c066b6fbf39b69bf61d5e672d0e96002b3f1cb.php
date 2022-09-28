<?php

/* AdminBundle:CtMarque:edit.html.twig */
class __TwigTemplate_3ccd2331be96a3d4498026e2b61aafa28622023562a22eaf37044d3d067f6d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6fc9df21d832b80e45d2d9a3035e2a6716a067c29cf23a55230c43e94f02977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fc9df21d832b80e45d2d9a3035e2a6716a067c29cf23a55230c43e94f02977->enter($__internal_a6fc9df21d832b80e45d2d9a3035e2a6716a067c29cf23a55230c43e94f02977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:edit.html.twig"));

        $__internal_59b3cba570b8a4bdc7d3b43861bb6fa74ae77f0c3ab49c45e15589e9daff422b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b3cba570b8a4bdc7d3b43861bb6fa74ae77f0c3ab49c45e15589e9daff422b->enter($__internal_59b3cba570b8a4bdc7d3b43861bb6fa74ae77f0c3ab49c45e15589e9daff422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fc9df21d832b80e45d2d9a3035e2a6716a067c29cf23a55230c43e94f02977->leave($__internal_a6fc9df21d832b80e45d2d9a3035e2a6716a067c29cf23a55230c43e94f02977_prof);

        
        $__internal_59b3cba570b8a4bdc7d3b43861bb6fa74ae77f0c3ab49c45e15589e9daff422b->leave($__internal_59b3cba570b8a4bdc7d3b43861bb6fa74ae77f0c3ab49c45e15589e9daff422b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2b46db27bcde48396b9b3403ffb2884180b0a6533f9102d5ea59e43d5a55f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b46db27bcde48396b9b3403ffb2884180b0a6533f9102d5ea59e43d5a55f40->enter($__internal_d2b46db27bcde48396b9b3403ffb2884180b0a6533f9102d5ea59e43d5a55f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2baebe83cf2f8dcc955cb46ab99cec7c9d5bca511bef1557bf13c2bc7778d9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2baebe83cf2f8dcc955cb46ab99cec7c9d5bca511bef1557bf13c2bc7778d9a6->enter($__internal_2baebe83cf2f8dcc955cb46ab99cec7c9d5bca511bef1557bf13c2bc7778d9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Marque ";
        
        $__internal_2baebe83cf2f8dcc955cb46ab99cec7c9d5bca511bef1557bf13c2bc7778d9a6->leave($__internal_2baebe83cf2f8dcc955cb46ab99cec7c9d5bca511bef1557bf13c2bc7778d9a6_prof);

        
        $__internal_d2b46db27bcde48396b9b3403ffb2884180b0a6533f9102d5ea59e43d5a55f40->leave($__internal_d2b46db27bcde48396b9b3403ffb2884180b0a6533f9102d5ea59e43d5a55f40_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2cae20c582112d8d156e53a206fd31b7fd169a1afd1ab716c723b63557f6892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cae20c582112d8d156e53a206fd31b7fd169a1afd1ab716c723b63557f6892->enter($__internal_a2cae20c582112d8d156e53a206fd31b7fd169a1afd1ab716c723b63557f6892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bedd0e04a55f9c59a04b59b75ca4a38aa0c866a77a0f1c92b9c2158f08a4e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bedd0e04a55f9c59a04b59b75ca4a38aa0c866a77a0f1c92b9c2158f08a4e88->enter($__internal_2bedd0e04a55f9c59a04b59b75ca4a38aa0c866a77a0f1c92b9c2158f08a4e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_2bedd0e04a55f9c59a04b59b75ca4a38aa0c866a77a0f1c92b9c2158f08a4e88->leave($__internal_2bedd0e04a55f9c59a04b59b75ca4a38aa0c866a77a0f1c92b9c2158f08a4e88_prof);

        
        $__internal_a2cae20c582112d8d156e53a206fd31b7fd169a1afd1ab716c723b63557f6892->leave($__internal_a2cae20c582112d8d156e53a206fd31b7fd169a1afd1ab716c723b63557f6892_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Marque {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMarque:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/edit.html.twig");
    }
}
