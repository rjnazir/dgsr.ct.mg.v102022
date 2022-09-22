<?php

/* @Admin/CtCentre/edit.html.twig */
class __TwigTemplate_11485938e26a55127235c097657231307d909939bb72e9b17535d8300206c782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCentre/edit.html.twig", 1);
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
        $__internal_ebc79b743b5c4463cc1965592041e46ac4ef17027dc312d4b55348133a6d40c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc79b743b5c4463cc1965592041e46ac4ef17027dc312d4b55348133a6d40c0->enter($__internal_ebc79b743b5c4463cc1965592041e46ac4ef17027dc312d4b55348133a6d40c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/edit.html.twig"));

        $__internal_4b30ba26c1a00e19c32f3a4a4d1da1f255a4f90e30fd57e0c9540d63cda01012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b30ba26c1a00e19c32f3a4a4d1da1f255a4f90e30fd57e0c9540d63cda01012->enter($__internal_4b30ba26c1a00e19c32f3a4a4d1da1f255a4f90e30fd57e0c9540d63cda01012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc79b743b5c4463cc1965592041e46ac4ef17027dc312d4b55348133a6d40c0->leave($__internal_ebc79b743b5c4463cc1965592041e46ac4ef17027dc312d4b55348133a6d40c0_prof);

        
        $__internal_4b30ba26c1a00e19c32f3a4a4d1da1f255a4f90e30fd57e0c9540d63cda01012->leave($__internal_4b30ba26c1a00e19c32f3a4a4d1da1f255a4f90e30fd57e0c9540d63cda01012_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0294700165ffbdde558d1c9c3006ba94c92e0f31c00362974f5f2f535f9b772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0294700165ffbdde558d1c9c3006ba94c92e0f31c00362974f5f2f535f9b772->enter($__internal_e0294700165ffbdde558d1c9c3006ba94c92e0f31c00362974f5f2f535f9b772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0914f1a04ccf3754014eb1f51677dc00c921f57a4d755cb8cb105907cca2a68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0914f1a04ccf3754014eb1f51677dc00c921f57a4d755cb8cb105907cca2a68e->enter($__internal_0914f1a04ccf3754014eb1f51677dc00c921f57a4d755cb8cb105907cca2a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Centre ";
        
        $__internal_0914f1a04ccf3754014eb1f51677dc00c921f57a4d755cb8cb105907cca2a68e->leave($__internal_0914f1a04ccf3754014eb1f51677dc00c921f57a4d755cb8cb105907cca2a68e_prof);

        
        $__internal_e0294700165ffbdde558d1c9c3006ba94c92e0f31c00362974f5f2f535f9b772->leave($__internal_e0294700165ffbdde558d1c9c3006ba94c92e0f31c00362974f5f2f535f9b772_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e178b153b8985d9d2d1a6371946e0b43f6fd6a81d692a80d24eac123649a37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e178b153b8985d9d2d1a6371946e0b43f6fd6a81d692a80d24eac123649a37a->enter($__internal_8e178b153b8985d9d2d1a6371946e0b43f6fd6a81d692a80d24eac123649a37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c6418de0d615f87f03f9308c75d21d72b75a518828589bdf83985b895068b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6418de0d615f87f03f9308c75d21d72b75a518828589bdf83985b895068b4e->enter($__internal_6c6418de0d615f87f03f9308c75d21d72b75a518828589bdf83985b895068b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6c6418de0d615f87f03f9308c75d21d72b75a518828589bdf83985b895068b4e->leave($__internal_6c6418de0d615f87f03f9308c75d21d72b75a518828589bdf83985b895068b4e_prof);

        
        $__internal_8e178b153b8985d9d2d1a6371946e0b43f6fd6a81d692a80d24eac123649a37a->leave($__internal_8e178b153b8985d9d2d1a6371946e0b43f6fd6a81d692a80d24eac123649a37a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCentre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctProvince) }}
                        {{ form_row(edit_form.ctrNom) }}
                        {{ form_row(edit_form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtCentre/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCentre\\edit.html.twig");
    }
}
