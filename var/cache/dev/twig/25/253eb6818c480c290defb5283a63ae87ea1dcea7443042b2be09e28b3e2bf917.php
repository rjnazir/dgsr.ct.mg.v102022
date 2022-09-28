<?php

/* @Admin/CtImprimeTech/edit.html.twig */
class __TwigTemplate_29d12d8e57fe64e0397bca0e1764715520db27708196445528ef604edf411292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTech/edit.html.twig", 1);
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
        $__internal_68ea2b96822d97a8ddf53cdbf3befc31244d1eea928c447a095eb97f43b464cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ea2b96822d97a8ddf53cdbf3befc31244d1eea928c447a095eb97f43b464cd->enter($__internal_68ea2b96822d97a8ddf53cdbf3befc31244d1eea928c447a095eb97f43b464cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/edit.html.twig"));

        $__internal_f422ae0eb9602fc446bc81902bda51608084470ff318525b83bdc70a084a7d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f422ae0eb9602fc446bc81902bda51608084470ff318525b83bdc70a084a7d32->enter($__internal_f422ae0eb9602fc446bc81902bda51608084470ff318525b83bdc70a084a7d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ea2b96822d97a8ddf53cdbf3befc31244d1eea928c447a095eb97f43b464cd->leave($__internal_68ea2b96822d97a8ddf53cdbf3befc31244d1eea928c447a095eb97f43b464cd_prof);

        
        $__internal_f422ae0eb9602fc446bc81902bda51608084470ff318525b83bdc70a084a7d32->leave($__internal_f422ae0eb9602fc446bc81902bda51608084470ff318525b83bdc70a084a7d32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bd3e022e39e34a0825ecf2e2bdc93a268e986c5f0872b9b9c12530bbee83400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd3e022e39e34a0825ecf2e2bdc93a268e986c5f0872b9b9c12530bbee83400->enter($__internal_3bd3e022e39e34a0825ecf2e2bdc93a268e986c5f0872b9b9c12530bbee83400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d98b4a6a8b425b6e0f999b347a1c79de6d67414039153b48ab7eb6f17158905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d98b4a6a8b425b6e0f999b347a1c79de6d67414039153b48ab7eb6f17158905->enter($__internal_9d98b4a6a8b425b6e0f999b347a1c79de6d67414039153b48ab7eb6f17158905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification imprimé technique ";
        
        $__internal_9d98b4a6a8b425b6e0f999b347a1c79de6d67414039153b48ab7eb6f17158905->leave($__internal_9d98b4a6a8b425b6e0f999b347a1c79de6d67414039153b48ab7eb6f17158905_prof);

        
        $__internal_3bd3e022e39e34a0825ecf2e2bdc93a268e986c5f0872b9b9c12530bbee83400->leave($__internal_3bd3e022e39e34a0825ecf2e2bdc93a268e986c5f0872b9b9c12530bbee83400_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b3b820135ab070d66e3bdda0c1348326a7265a797169c0fb51606ad7d37b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b3b820135ab070d66e3bdda0c1348326a7265a797169c0fb51606ad7d37b83->enter($__internal_50b3b820135ab070d66e3bdda0c1348326a7265a797169c0fb51606ad7d37b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcc6e1eaa8fefe4a8c344c505f64ed2de62b9a6f481d98e70be9b2d997728db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc6e1eaa8fefe4a8c344c505f64ed2de62b9a6f481d98e70be9b2d997728db5->enter($__internal_dcc6e1eaa8fefe4a8c344c505f64ed2de62b9a6f481d98e70be9b2d997728db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "abrevImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_dcc6e1eaa8fefe4a8c344c505f64ed2de62b9a6f481d98e70be9b2d997728db5->leave($__internal_dcc6e1eaa8fefe4a8c344c505f64ed2de62b9a6f481d98e70be9b2d997728db5_prof);

        
        $__internal_50b3b820135ab070d66e3bdda0c1348326a7265a797169c0fb51606ad7d37b83->leave($__internal_50b3b820135ab070d66e3bdda0c1348326a7265a797169c0fb51606ad7d37b83_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTech/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  147 => 44,  139 => 39,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification imprimé technique {% endblock %}

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.abrevImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtImprimeTech/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTech\\edit.html.twig");
    }
}
