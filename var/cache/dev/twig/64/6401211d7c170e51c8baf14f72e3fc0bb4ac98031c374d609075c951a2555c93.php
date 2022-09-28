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
        $__internal_9391fbc510c48037b4d50514ddc9b09d73cfcbc52b7cc22f887796a56331c7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9391fbc510c48037b4d50514ddc9b09d73cfcbc52b7cc22f887796a56331c7b0->enter($__internal_9391fbc510c48037b4d50514ddc9b09d73cfcbc52b7cc22f887796a56331c7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/edit.html.twig"));

        $__internal_cb3cce8d17adb40bb02916106d3961c459e226fcda4d013d4ce676ec56345437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3cce8d17adb40bb02916106d3961c459e226fcda4d013d4ce676ec56345437->enter($__internal_cb3cce8d17adb40bb02916106d3961c459e226fcda4d013d4ce676ec56345437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9391fbc510c48037b4d50514ddc9b09d73cfcbc52b7cc22f887796a56331c7b0->leave($__internal_9391fbc510c48037b4d50514ddc9b09d73cfcbc52b7cc22f887796a56331c7b0_prof);

        
        $__internal_cb3cce8d17adb40bb02916106d3961c459e226fcda4d013d4ce676ec56345437->leave($__internal_cb3cce8d17adb40bb02916106d3961c459e226fcda4d013d4ce676ec56345437_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70aec48f41159c0716f1b257c53a3c8f75fa93e6a26e67a8b6588aed69c845d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70aec48f41159c0716f1b257c53a3c8f75fa93e6a26e67a8b6588aed69c845d5->enter($__internal_70aec48f41159c0716f1b257c53a3c8f75fa93e6a26e67a8b6588aed69c845d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bccf9f7a6caf244968860ca6162a70bd7295c847a5a514d43bffd25641f9a48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccf9f7a6caf244968860ca6162a70bd7295c847a5a514d43bffd25641f9a48f->enter($__internal_bccf9f7a6caf244968860ca6162a70bd7295c847a5a514d43bffd25641f9a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carrosserie ";
        
        $__internal_bccf9f7a6caf244968860ca6162a70bd7295c847a5a514d43bffd25641f9a48f->leave($__internal_bccf9f7a6caf244968860ca6162a70bd7295c847a5a514d43bffd25641f9a48f_prof);

        
        $__internal_70aec48f41159c0716f1b257c53a3c8f75fa93e6a26e67a8b6588aed69c845d5->leave($__internal_70aec48f41159c0716f1b257c53a3c8f75fa93e6a26e67a8b6588aed69c845d5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03d0a3bd62506242d5991a39e400a1e08950b974a5361c231b0f195d53c1c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03d0a3bd62506242d5991a39e400a1e08950b974a5361c231b0f195d53c1c87->enter($__internal_a03d0a3bd62506242d5991a39e400a1e08950b974a5361c231b0f195d53c1c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_224975995415d0fb88919075e09bf4e959593d806367f6450bd077f2cf04c636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224975995415d0fb88919075e09bf4e959593d806367f6450bd077f2cf04c636->enter($__internal_224975995415d0fb88919075e09bf4e959593d806367f6450bd077f2cf04c636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_224975995415d0fb88919075e09bf4e959593d806367f6450bd077f2cf04c636->leave($__internal_224975995415d0fb88919075e09bf4e959593d806367f6450bd077f2cf04c636_prof);

        
        $__internal_a03d0a3bd62506242d5991a39e400a1e08950b974a5361c231b0f195d53c1c87->leave($__internal_a03d0a3bd62506242d5991a39e400a1e08950b974a5361c231b0f195d53c1c87_prof);

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
