<?php

/* @Admin/CtCarosserie/edit.html.twig */
class __TwigTemplate_b36e76d384d1d26472d156aaeb6bb81e0dd6c849abf9d9f0b4b579de245b93c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCarosserie/edit.html.twig", 1);
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
        $__internal_48a6189cad8fa1034b45f2fbac6563f3729e4dfab51588f8dd224041426a774f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a6189cad8fa1034b45f2fbac6563f3729e4dfab51588f8dd224041426a774f->enter($__internal_48a6189cad8fa1034b45f2fbac6563f3729e4dfab51588f8dd224041426a774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/edit.html.twig"));

        $__internal_a5c398957f25564ee118f74f319203e80340d2d64a0ae10a6b42c48499dca6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c398957f25564ee118f74f319203e80340d2d64a0ae10a6b42c48499dca6b0->enter($__internal_a5c398957f25564ee118f74f319203e80340d2d64a0ae10a6b42c48499dca6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a6189cad8fa1034b45f2fbac6563f3729e4dfab51588f8dd224041426a774f->leave($__internal_48a6189cad8fa1034b45f2fbac6563f3729e4dfab51588f8dd224041426a774f_prof);

        
        $__internal_a5c398957f25564ee118f74f319203e80340d2d64a0ae10a6b42c48499dca6b0->leave($__internal_a5c398957f25564ee118f74f319203e80340d2d64a0ae10a6b42c48499dca6b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdb4ebf31dee3c11627804bd8e45ef71ede1a0ef98ea5d5ebab1139a70323033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb4ebf31dee3c11627804bd8e45ef71ede1a0ef98ea5d5ebab1139a70323033->enter($__internal_cdb4ebf31dee3c11627804bd8e45ef71ede1a0ef98ea5d5ebab1139a70323033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f14840ff8e47c9d6ed479129431b862ce20300d4e29aca6215136f89813d4c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14840ff8e47c9d6ed479129431b862ce20300d4e29aca6215136f89813d4c26->enter($__internal_f14840ff8e47c9d6ed479129431b862ce20300d4e29aca6215136f89813d4c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carrosserie ";
        
        $__internal_f14840ff8e47c9d6ed479129431b862ce20300d4e29aca6215136f89813d4c26->leave($__internal_f14840ff8e47c9d6ed479129431b862ce20300d4e29aca6215136f89813d4c26_prof);

        
        $__internal_cdb4ebf31dee3c11627804bd8e45ef71ede1a0ef98ea5d5ebab1139a70323033->leave($__internal_cdb4ebf31dee3c11627804bd8e45ef71ede1a0ef98ea5d5ebab1139a70323033_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a35360beaace0e3e8dfb8f7c71e4d813dec7c6314cf05f41e2fe6122340dda00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35360beaace0e3e8dfb8f7c71e4d813dec7c6314cf05f41e2fe6122340dda00->enter($__internal_a35360beaace0e3e8dfb8f7c71e4d813dec7c6314cf05f41e2fe6122340dda00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be8e86aef1fad9439b470616d3322220d8895b5052f058b13af8274e811f88c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e86aef1fad9439b470616d3322220d8895b5052f058b13af8274e811f88c0->enter($__internal_be8e86aef1fad9439b470616d3322220d8895b5052f058b13af8274e811f88c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
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
        
        $__internal_be8e86aef1fad9439b470616d3322220d8895b5052f058b13af8274e811f88c0->leave($__internal_be8e86aef1fad9439b470616d3322220d8895b5052f058b13af8274e811f88c0_prof);

        
        $__internal_a35360beaace0e3e8dfb8f7c71e4d813dec7c6314cf05f41e2fe6122340dda00->leave($__internal_a35360beaace0e3e8dfb8f7c71e4d813dec7c6314cf05f41e2fe6122340dda00_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCarosserie/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Carrosserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtCarosserie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCarosserie\\edit.html.twig");
    }
}
