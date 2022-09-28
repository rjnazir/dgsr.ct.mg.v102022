<?php

/* AdminBundle:CtProvince:add.html.twig */
class __TwigTemplate_c16837f924693a0aad988cd794bea424cfdb3815fb66cbc18c505aa9bb01aed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:add.html.twig", 1);
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
        $__internal_916443c53394621360f8dfc7277c35b925d96e7595c64352706bafe7306246d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916443c53394621360f8dfc7277c35b925d96e7595c64352706bafe7306246d8->enter($__internal_916443c53394621360f8dfc7277c35b925d96e7595c64352706bafe7306246d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:add.html.twig"));

        $__internal_055fa0ad4e2fee6b5f402ce3e6641cd4b756a367843d304e94b29def911a4d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055fa0ad4e2fee6b5f402ce3e6641cd4b756a367843d304e94b29def911a4d88->enter($__internal_055fa0ad4e2fee6b5f402ce3e6641cd4b756a367843d304e94b29def911a4d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916443c53394621360f8dfc7277c35b925d96e7595c64352706bafe7306246d8->leave($__internal_916443c53394621360f8dfc7277c35b925d96e7595c64352706bafe7306246d8_prof);

        
        $__internal_055fa0ad4e2fee6b5f402ce3e6641cd4b756a367843d304e94b29def911a4d88->leave($__internal_055fa0ad4e2fee6b5f402ce3e6641cd4b756a367843d304e94b29def911a4d88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9bc1ba2ffb53cc96028523cd9ef81f7ee4694190c0542a9409614746babce5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bc1ba2ffb53cc96028523cd9ef81f7ee4694190c0542a9409614746babce5c->enter($__internal_f9bc1ba2ffb53cc96028523cd9ef81f7ee4694190c0542a9409614746babce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_093318daa40f4241152973b4d184bf600c0e345bfdbf26f7ebcbc50fca34d05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093318daa40f4241152973b4d184bf600c0e345bfdbf26f7ebcbc50fca34d05b->enter($__internal_093318daa40f4241152973b4d184bf600c0e345bfdbf26f7ebcbc50fca34d05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Province ";
        
        $__internal_093318daa40f4241152973b4d184bf600c0e345bfdbf26f7ebcbc50fca34d05b->leave($__internal_093318daa40f4241152973b4d184bf600c0e345bfdbf26f7ebcbc50fca34d05b_prof);

        
        $__internal_f9bc1ba2ffb53cc96028523cd9ef81f7ee4694190c0542a9409614746babce5c->leave($__internal_f9bc1ba2ffb53cc96028523cd9ef81f7ee4694190c0542a9409614746babce5c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac3d94ada81fa6c4d5ffe6688ffebe29acb1f8367efc3f039b04cbf3b3daf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac3d94ada81fa6c4d5ffe6688ffebe29acb1f8367efc3f039b04cbf3b3daf51->enter($__internal_cac3d94ada81fa6c4d5ffe6688ffebe29acb1f8367efc3f039b04cbf3b3daf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc82ad5f1ee4c430fdf5b0d9bd12566a7ec96fc4c2d917f37b62fcd6f46fd7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc82ad5f1ee4c430fdf5b0d9bd12566a7ec96fc4c2d917f37b62fcd6f46fd7c8->enter($__internal_bc82ad5f1ee4c430fdf5b0d9bd12566a7ec96fc4c2d917f37b62fcd6f46fd7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une province</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_bc82ad5f1ee4c430fdf5b0d9bd12566a7ec96fc4c2d917f37b62fcd6f46fd7c8->leave($__internal_bc82ad5f1ee4c430fdf5b0d9bd12566a7ec96fc4c2d917f37b62fcd6f46fd7c8_prof);

        
        $__internal_cac3d94ada81fa6c4d5ffe6688ffebe29acb1f8367efc3f039b04cbf3b3daf51->leave($__internal_cac3d94ada81fa6c4d5ffe6688ffebe29acb1f8367efc3f039b04cbf3b3daf51_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une province</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.prvNom) }}
                        {{ form_row(form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProvince:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/add.html.twig");
    }
}
