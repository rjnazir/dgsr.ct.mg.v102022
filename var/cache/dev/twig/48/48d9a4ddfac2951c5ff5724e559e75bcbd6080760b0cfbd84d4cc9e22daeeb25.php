<?php

/* @Admin/CtTypeAnomalie/edit.html.twig */
class __TwigTemplate_3874800f180dfa71f267f57969c995dd3612118a0a0a56312b9a526eac131377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/edit.html.twig", 1);
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
        $__internal_af33e196005e23d9df3b1ddcdce4827361fb803dba7c386de76c19b9d3d4f14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af33e196005e23d9df3b1ddcdce4827361fb803dba7c386de76c19b9d3d4f14a->enter($__internal_af33e196005e23d9df3b1ddcdce4827361fb803dba7c386de76c19b9d3d4f14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/edit.html.twig"));

        $__internal_571ae779a529432cf7560e12a0e5ccf381fcf65790b869090973c6f2c0651190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571ae779a529432cf7560e12a0e5ccf381fcf65790b869090973c6f2c0651190->enter($__internal_571ae779a529432cf7560e12a0e5ccf381fcf65790b869090973c6f2c0651190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af33e196005e23d9df3b1ddcdce4827361fb803dba7c386de76c19b9d3d4f14a->leave($__internal_af33e196005e23d9df3b1ddcdce4827361fb803dba7c386de76c19b9d3d4f14a_prof);

        
        $__internal_571ae779a529432cf7560e12a0e5ccf381fcf65790b869090973c6f2c0651190->leave($__internal_571ae779a529432cf7560e12a0e5ccf381fcf65790b869090973c6f2c0651190_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e62d27f74076e00c861ae06abeee971ecb0e81fb6354ae7229a172dac124a340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62d27f74076e00c861ae06abeee971ecb0e81fb6354ae7229a172dac124a340->enter($__internal_e62d27f74076e00c861ae06abeee971ecb0e81fb6354ae7229a172dac124a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abe000306223a00059452740c3b813932ba25f052a3711080591ffeb9807ac20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe000306223a00059452740c3b813932ba25f052a3711080591ffeb9807ac20->enter($__internal_abe000306223a00059452740c3b813932ba25f052a3711080591ffeb9807ac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type anomalie ";
        
        $__internal_abe000306223a00059452740c3b813932ba25f052a3711080591ffeb9807ac20->leave($__internal_abe000306223a00059452740c3b813932ba25f052a3711080591ffeb9807ac20_prof);

        
        $__internal_e62d27f74076e00c861ae06abeee971ecb0e81fb6354ae7229a172dac124a340->leave($__internal_e62d27f74076e00c861ae06abeee971ecb0e81fb6354ae7229a172dac124a340_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0c9cf240cb1c855b7073e15a8f69d09b31c0a3957a2f496710964aed76e8dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c9cf240cb1c855b7073e15a8f69d09b31c0a3957a2f496710964aed76e8dff->enter($__internal_c0c9cf240cb1c855b7073e15a8f69d09b31c0a3957a2f496710964aed76e8dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1f7b5edffd59501e082be49e0817f4290f0ca9ecf22d6b246c6dc2e687f6e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f7b5edffd59501e082be49e0817f4290f0ca9ecf22d6b246c6dc2e687f6e7d->enter($__internal_c1f7b5edffd59501e082be49e0817f4290f0ca9ecf22d6b246c6dc2e687f6e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
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
        
        $__internal_c1f7b5edffd59501e082be49e0817f4290f0ca9ecf22d6b246c6dc2e687f6e7d->leave($__internal_c1f7b5edffd59501e082be49e0817f4290f0ca9ecf22d6b246c6dc2e687f6e7d_prof);

        
        $__internal_c0c9cf240cb1c855b7073e15a8f69d09b31c0a3957a2f496710964aed76e8dff->leave($__internal_c0c9cf240cb1c855b7073e15a8f69d09b31c0a3957a2f496710964aed76e8dff_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Editer une type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeAnomalie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\edit.html.twig");
    }
}
