<?php

/* @Admin/CtProvince/edit.html.twig */
class __TwigTemplate_3f2e72cf86730c2e62736e913631f7b9f7fda1284f9985e942a81b4f75d00c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/edit.html.twig", 1);
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
        $__internal_f7d4b5df09a15848c3159ad65d554437aa2bd04ccef829cbb1daf4930e0f38dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d4b5df09a15848c3159ad65d554437aa2bd04ccef829cbb1daf4930e0f38dd->enter($__internal_f7d4b5df09a15848c3159ad65d554437aa2bd04ccef829cbb1daf4930e0f38dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/edit.html.twig"));

        $__internal_5c34081a2d1383f855551a0ac28a6c8fcc5a70030795014d54c3b6aaf329fe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c34081a2d1383f855551a0ac28a6c8fcc5a70030795014d54c3b6aaf329fe20->enter($__internal_5c34081a2d1383f855551a0ac28a6c8fcc5a70030795014d54c3b6aaf329fe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d4b5df09a15848c3159ad65d554437aa2bd04ccef829cbb1daf4930e0f38dd->leave($__internal_f7d4b5df09a15848c3159ad65d554437aa2bd04ccef829cbb1daf4930e0f38dd_prof);

        
        $__internal_5c34081a2d1383f855551a0ac28a6c8fcc5a70030795014d54c3b6aaf329fe20->leave($__internal_5c34081a2d1383f855551a0ac28a6c8fcc5a70030795014d54c3b6aaf329fe20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5e4aa2622d48587523e7f9500c6dbbfb4f66878e61e6bd9af7046b173ce24f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e4aa2622d48587523e7f9500c6dbbfb4f66878e61e6bd9af7046b173ce24f3->enter($__internal_f5e4aa2622d48587523e7f9500c6dbbfb4f66878e61e6bd9af7046b173ce24f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d67daa7ca79e0ca019ca4379341c43352b0192b7aca0dae7dc7c6d546bbe519c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67daa7ca79e0ca019ca4379341c43352b0192b7aca0dae7dc7c6d546bbe519c->enter($__internal_d67daa7ca79e0ca019ca4379341c43352b0192b7aca0dae7dc7c6d546bbe519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Province ";
        
        $__internal_d67daa7ca79e0ca019ca4379341c43352b0192b7aca0dae7dc7c6d546bbe519c->leave($__internal_d67daa7ca79e0ca019ca4379341c43352b0192b7aca0dae7dc7c6d546bbe519c_prof);

        
        $__internal_f5e4aa2622d48587523e7f9500c6dbbfb4f66878e61e6bd9af7046b173ce24f3->leave($__internal_f5e4aa2622d48587523e7f9500c6dbbfb4f66878e61e6bd9af7046b173ce24f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b71551fa808ba46d45b0f1a949a821d7d581fb96f90ddc55e2b96328b78ea382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71551fa808ba46d45b0f1a949a821d7d581fb96f90ddc55e2b96328b78ea382->enter($__internal_b71551fa808ba46d45b0f1a949a821d7d581fb96f90ddc55e2b96328b78ea382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67c9ee20a7b44ab910da89064922f3769c3f934829167b9f12d2f623f4a63e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c9ee20a7b44ab910da89064922f3769c3f934829167b9f12d2f623f4a63e87->enter($__internal_67c9ee20a7b44ab910da89064922f3769c3f934829167b9f12d2f623f4a63e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_67c9ee20a7b44ab910da89064922f3769c3f934829167b9f12d2f623f4a63e87->leave($__internal_67c9ee20a7b44ab910da89064922f3769c3f934829167b9f12d2f623f4a63e87_prof);

        
        $__internal_b71551fa808ba46d45b0f1a949a821d7d581fb96f90ddc55e2b96328b78ea382->leave($__internal_b71551fa808ba46d45b0f1a949a821d7d581fb96f90ddc55e2b96328b78ea382_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Province {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.prvNom) }}
                        {{ form_row(edit_form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProvince/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\edit.html.twig");
    }
}
