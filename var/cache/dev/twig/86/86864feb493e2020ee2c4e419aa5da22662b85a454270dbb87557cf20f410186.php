<?php

/* @Admin/CtTypeDroitPtac/edit.html.twig */
class __TwigTemplate_ba311160c31565564f4848365c8e71e1e56f55f0158a18bf6d78cb75e3e1605a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeDroitPtac/edit.html.twig", 1);
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
        $__internal_3aa02d67029b9a10ca94a9d0868ed6f45de193d8872e68fc2e19156db4da508a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa02d67029b9a10ca94a9d0868ed6f45de193d8872e68fc2e19156db4da508a->enter($__internal_3aa02d67029b9a10ca94a9d0868ed6f45de193d8872e68fc2e19156db4da508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/edit.html.twig"));

        $__internal_b0c9fe093519a24722d8b3531ce5f85163185a3a14c7398780d69ae9daa0b7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c9fe093519a24722d8b3531ce5f85163185a3a14c7398780d69ae9daa0b7a8->enter($__internal_b0c9fe093519a24722d8b3531ce5f85163185a3a14c7398780d69ae9daa0b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa02d67029b9a10ca94a9d0868ed6f45de193d8872e68fc2e19156db4da508a->leave($__internal_3aa02d67029b9a10ca94a9d0868ed6f45de193d8872e68fc2e19156db4da508a_prof);

        
        $__internal_b0c9fe093519a24722d8b3531ce5f85163185a3a14c7398780d69ae9daa0b7a8->leave($__internal_b0c9fe093519a24722d8b3531ce5f85163185a3a14c7398780d69ae9daa0b7a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79472878732b90b137c81124986a69b48df8fcd70ef21c3b8946781ee048aad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79472878732b90b137c81124986a69b48df8fcd70ef21c3b8946781ee048aad1->enter($__internal_79472878732b90b137c81124986a69b48df8fcd70ef21c3b8946781ee048aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_658e9905244a0d531128f90620909b9d16a81b297dbed64f0df3d29ffb262b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658e9905244a0d531128f90620909b9d16a81b297dbed64f0df3d29ffb262b19->enter($__internal_658e9905244a0d531128f90620909b9d16a81b297dbed64f0df3d29ffb262b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de droit PTAC ";
        
        $__internal_658e9905244a0d531128f90620909b9d16a81b297dbed64f0df3d29ffb262b19->leave($__internal_658e9905244a0d531128f90620909b9d16a81b297dbed64f0df3d29ffb262b19_prof);

        
        $__internal_79472878732b90b137c81124986a69b48df8fcd70ef21c3b8946781ee048aad1->leave($__internal_79472878732b90b137c81124986a69b48df8fcd70ef21c3b8946781ee048aad1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a88d50fd0924be1a4f8ade5951565e014c74382dab4bd4ba9446b5d5803af56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a88d50fd0924be1a4f8ade5951565e014c74382dab4bd4ba9446b5d5803af56->enter($__internal_5a88d50fd0924be1a4f8ade5951565e014c74382dab4bd4ba9446b5d5803af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8fe7ee3d5b517e71727b58ef482c3ec767918ccb9613eb8717aa97d35680735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fe7ee3d5b517e71727b58ef482c3ec767918ccb9613eb8717aa97d35680735->enter($__internal_f8fe7ee3d5b517e71727b58ef482c3ec767918ccb9613eb8717aa97d35680735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
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
        
        $__internal_f8fe7ee3d5b517e71727b58ef482c3ec767918ccb9613eb8717aa97d35680735->leave($__internal_f8fe7ee3d5b517e71727b58ef482c3ec767918ccb9613eb8717aa97d35680735_prof);

        
        $__internal_5a88d50fd0924be1a4f8ade5951565e014c74382dab4bd4ba9446b5d5803af56->leave($__internal_5a88d50fd0924be1a4f8ade5951565e014c74382dab4bd4ba9446b5d5803af56_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeDroitPtac/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type de droit PTAC {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeDroitPtac/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeDroitPtac\\edit.html.twig");
    }
}
