<?php

/* AdminBundle:CtUtilisation:edit.html.twig */
class __TwigTemplate_9c64c5cceddf4eab18e68b5d6e2ab8a99b2f93361158c5787352521b8e2fe29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUtilisation:edit.html.twig", 1);
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
        $__internal_196be25b14853768e63f531a2818d153ca35051c03b88425fa786d66eb1ff8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196be25b14853768e63f531a2818d153ca35051c03b88425fa786d66eb1ff8f3->enter($__internal_196be25b14853768e63f531a2818d153ca35051c03b88425fa786d66eb1ff8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:edit.html.twig"));

        $__internal_144025de8f15a0f0fe38acbba11fe1d2fad2f720e552769b777381465e760070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144025de8f15a0f0fe38acbba11fe1d2fad2f720e552769b777381465e760070->enter($__internal_144025de8f15a0f0fe38acbba11fe1d2fad2f720e552769b777381465e760070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196be25b14853768e63f531a2818d153ca35051c03b88425fa786d66eb1ff8f3->leave($__internal_196be25b14853768e63f531a2818d153ca35051c03b88425fa786d66eb1ff8f3_prof);

        
        $__internal_144025de8f15a0f0fe38acbba11fe1d2fad2f720e552769b777381465e760070->leave($__internal_144025de8f15a0f0fe38acbba11fe1d2fad2f720e552769b777381465e760070_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb5706f32f8d35d63ee5dc4b175e2cc1024a412a2698a7ecec53cc18104fb0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5706f32f8d35d63ee5dc4b175e2cc1024a412a2698a7ecec53cc18104fb0ec->enter($__internal_fb5706f32f8d35d63ee5dc4b175e2cc1024a412a2698a7ecec53cc18104fb0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24f463b5f0064a58ba3da032534982b0af774f2cea92d8ef1cb39764819338d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f463b5f0064a58ba3da032534982b0af774f2cea92d8ef1cb39764819338d2->enter($__internal_24f463b5f0064a58ba3da032534982b0af774f2cea92d8ef1cb39764819338d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Utilisation ";
        
        $__internal_24f463b5f0064a58ba3da032534982b0af774f2cea92d8ef1cb39764819338d2->leave($__internal_24f463b5f0064a58ba3da032534982b0af774f2cea92d8ef1cb39764819338d2_prof);

        
        $__internal_fb5706f32f8d35d63ee5dc4b175e2cc1024a412a2698a7ecec53cc18104fb0ec->leave($__internal_fb5706f32f8d35d63ee5dc4b175e2cc1024a412a2698a7ecec53cc18104fb0ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1213baf31d28fc5e87e5fc61f3250de845622c8291c83a4216b770145d9ab81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1213baf31d28fc5e87e5fc61f3250de845622c8291c83a4216b770145d9ab81a->enter($__internal_1213baf31d28fc5e87e5fc61f3250de845622c8291c83a4216b770145d9ab81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd82a959f0cc4431f531d5c26c828ba11273e15686174393f69e2752fc90dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd82a959f0cc4431f531d5c26c828ba11273e15686174393f69e2752fc90dc3->enter($__internal_edd82a959f0cc4431f531d5c26c828ba11273e15686174393f69e2752fc90dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
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
        
        $__internal_edd82a959f0cc4431f531d5c26c828ba11273e15686174393f69e2752fc90dc3->leave($__internal_edd82a959f0cc4431f531d5c26c828ba11273e15686174393f69e2752fc90dc3_prof);

        
        $__internal_1213baf31d28fc5e87e5fc61f3250de845622c8291c83a4216b770145d9ab81a->leave($__internal_1213baf31d28fc5e87e5fc61f3250de845622c8291c83a4216b770145d9ab81a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUtilisation:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Utilisation {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUtilisation:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUtilisation/edit.html.twig");
    }
}
