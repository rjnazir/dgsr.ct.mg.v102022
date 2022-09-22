<?php

/* AdminBundle:CtTypeReception:add.html.twig */
class __TwigTemplate_dc3ef5784280cb68c63a69f6af16c7029870c144b1ec882316c2cf0c2d0834bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:add.html.twig", 1);
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
        $__internal_bf3afda9ae34d2e291b1dfc0bdeda5f923d7e305e6afe6d5e4dd0e8e83822bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3afda9ae34d2e291b1dfc0bdeda5f923d7e305e6afe6d5e4dd0e8e83822bf1->enter($__internal_bf3afda9ae34d2e291b1dfc0bdeda5f923d7e305e6afe6d5e4dd0e8e83822bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:add.html.twig"));

        $__internal_7e11cc76444c961fbc583a7442e26a5450cf8b7339a238a57410dfbf7921eb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e11cc76444c961fbc583a7442e26a5450cf8b7339a238a57410dfbf7921eb15->enter($__internal_7e11cc76444c961fbc583a7442e26a5450cf8b7339a238a57410dfbf7921eb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3afda9ae34d2e291b1dfc0bdeda5f923d7e305e6afe6d5e4dd0e8e83822bf1->leave($__internal_bf3afda9ae34d2e291b1dfc0bdeda5f923d7e305e6afe6d5e4dd0e8e83822bf1_prof);

        
        $__internal_7e11cc76444c961fbc583a7442e26a5450cf8b7339a238a57410dfbf7921eb15->leave($__internal_7e11cc76444c961fbc583a7442e26a5450cf8b7339a238a57410dfbf7921eb15_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_419d8d1bedf9937db0f86ac3ae0b368551f29f14e74a8dc6f890e0a46efe1c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419d8d1bedf9937db0f86ac3ae0b368551f29f14e74a8dc6f890e0a46efe1c6b->enter($__internal_419d8d1bedf9937db0f86ac3ae0b368551f29f14e74a8dc6f890e0a46efe1c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9a21e28e22b100b0181c7798aa83f8b9e7b595230e9b5a5e9d3d3e8c53baae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a21e28e22b100b0181c7798aa83f8b9e7b595230e9b5a5e9d3d3e8c53baae4->enter($__internal_f9a21e28e22b100b0181c7798aa83f8b9e7b595230e9b5a5e9d3d3e8c53baae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de réception ";
        
        $__internal_f9a21e28e22b100b0181c7798aa83f8b9e7b595230e9b5a5e9d3d3e8c53baae4->leave($__internal_f9a21e28e22b100b0181c7798aa83f8b9e7b595230e9b5a5e9d3d3e8c53baae4_prof);

        
        $__internal_419d8d1bedf9937db0f86ac3ae0b368551f29f14e74a8dc6f890e0a46efe1c6b->leave($__internal_419d8d1bedf9937db0f86ac3ae0b368551f29f14e74a8dc6f890e0a46efe1c6b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_587f6e6c6c6ff7cd09a3c692c0d1125ec8151593d0344a652cd17a5ef6e6d255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587f6e6c6c6ff7cd09a3c692c0d1125ec8151593d0344a652cd17a5ef6e6d255->enter($__internal_587f6e6c6c6ff7cd09a3c692c0d1125ec8151593d0344a652cd17a5ef6e6d255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94f3a74e9e7836ff356eccd2d509bc77bd605ea4d58e3c18d522f70e50dd4c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f3a74e9e7836ff356eccd2d509bc77bd605ea4d58e3c18d522f70e50dd4c04->enter($__internal_94f3a74e9e7836ff356eccd2d509bc77bd605ea4d58e3c18d522f70e50dd4c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
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
        
        $__internal_94f3a74e9e7836ff356eccd2d509bc77bd605ea4d58e3c18d522f70e50dd4c04->leave($__internal_94f3a74e9e7836ff356eccd2d509bc77bd605ea4d58e3c18d522f70e50dd4c04_prof);

        
        $__internal_587f6e6c6c6ff7cd09a3c692c0d1125ec8151593d0344a652cd17a5ef6e6d255->leave($__internal_587f6e6c6c6ff7cd09a3c692c0d1125ec8151593d0344a652cd17a5ef6e6d255_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type de réception {% endblock %}

{% set menu_reception        = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeReception:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/add.html.twig");
    }
}
