<?php

/* AdminBundle:CtUtilisation:add.html.twig */
class __TwigTemplate_80caa838f05ef3279014217da05c34201d8b3fadc8eb5f121135896b866da32b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUtilisation:add.html.twig", 1);
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
        $__internal_9fcaac71215a0946bae4244f947b317c8102b205f61eba4c665eff6eddf61020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcaac71215a0946bae4244f947b317c8102b205f61eba4c665eff6eddf61020->enter($__internal_9fcaac71215a0946bae4244f947b317c8102b205f61eba4c665eff6eddf61020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:add.html.twig"));

        $__internal_038a9ee69cf9c450e530ea668af0df9db850ea3c9aec2c2201242c1d0137ade7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038a9ee69cf9c450e530ea668af0df9db850ea3c9aec2c2201242c1d0137ade7->enter($__internal_038a9ee69cf9c450e530ea668af0df9db850ea3c9aec2c2201242c1d0137ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fcaac71215a0946bae4244f947b317c8102b205f61eba4c665eff6eddf61020->leave($__internal_9fcaac71215a0946bae4244f947b317c8102b205f61eba4c665eff6eddf61020_prof);

        
        $__internal_038a9ee69cf9c450e530ea668af0df9db850ea3c9aec2c2201242c1d0137ade7->leave($__internal_038a9ee69cf9c450e530ea668af0df9db850ea3c9aec2c2201242c1d0137ade7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ab9788b98160eb1ad6095abc8a4917c54d5b3f3c33b617f64020a15656204fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab9788b98160eb1ad6095abc8a4917c54d5b3f3c33b617f64020a15656204fa->enter($__internal_6ab9788b98160eb1ad6095abc8a4917c54d5b3f3c33b617f64020a15656204fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23dd3ca7b4bbc0be0e573a174f84301afdb384bb5c395b06571873ddbe39fcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dd3ca7b4bbc0be0e573a174f84301afdb384bb5c395b06571873ddbe39fcad->enter($__internal_23dd3ca7b4bbc0be0e573a174f84301afdb384bb5c395b06571873ddbe39fcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_23dd3ca7b4bbc0be0e573a174f84301afdb384bb5c395b06571873ddbe39fcad->leave($__internal_23dd3ca7b4bbc0be0e573a174f84301afdb384bb5c395b06571873ddbe39fcad_prof);

        
        $__internal_6ab9788b98160eb1ad6095abc8a4917c54d5b3f3c33b617f64020a15656204fa->leave($__internal_6ab9788b98160eb1ad6095abc8a4917c54d5b3f3c33b617f64020a15656204fa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b25eba6ab02ae5d1e0b73a9b54d00582bc218196ca7cd35e247bcb03b89cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b25eba6ab02ae5d1e0b73a9b54d00582bc218196ca7cd35e247bcb03b89cc7->enter($__internal_15b25eba6ab02ae5d1e0b73a9b54d00582bc218196ca7cd35e247bcb03b89cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e80868a238d2c0b20757d73258ef1c3c480bdea1d0a7c7a5aefa748448fd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e80868a238d2c0b20757d73258ef1c3c480bdea1d0a7c7a5aefa748448fd26->enter($__internal_f6e80868a238d2c0b20757d73258ef1c3c480bdea1d0a7c7a5aefa748448fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f6e80868a238d2c0b20757d73258ef1c3c480bdea1d0a7c7a5aefa748448fd26->leave($__internal_f6e80868a238d2c0b20757d73258ef1c3c480bdea1d0a7c7a5aefa748448fd26_prof);

        
        $__internal_15b25eba6ab02ae5d1e0b73a9b54d00582bc218196ca7cd35e247bcb03b89cc7->leave($__internal_15b25eba6ab02ae5d1e0b73a9b54d00582bc218196ca7cd35e247bcb03b89cc7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUtilisation:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUtilisation:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUtilisation/add.html.twig");
    }
}
