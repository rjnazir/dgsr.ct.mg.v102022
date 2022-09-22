<?php

/* @Admin/CtProcesVerbal/add.html.twig */
class __TwigTemplate_0cf6cbc48ca912e051c4367abf0f824e059052a192e64e8e4998b10c9c3260de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/add.html.twig", 1);
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
        $__internal_0e2d26cfb2cd1c829f48859489d2195be5063cafc649d31387b257fe8eccb29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2d26cfb2cd1c829f48859489d2195be5063cafc649d31387b257fe8eccb29a->enter($__internal_0e2d26cfb2cd1c829f48859489d2195be5063cafc649d31387b257fe8eccb29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/add.html.twig"));

        $__internal_f0b803ac5713389071aa0ef0e8fba49cb3db29033b0aaaa3f3073e54ba5d1650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b803ac5713389071aa0ef0e8fba49cb3db29033b0aaaa3f3073e54ba5d1650->enter($__internal_f0b803ac5713389071aa0ef0e8fba49cb3db29033b0aaaa3f3073e54ba5d1650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 8
        $context["menu_proces_verbal_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2d26cfb2cd1c829f48859489d2195be5063cafc649d31387b257fe8eccb29a->leave($__internal_0e2d26cfb2cd1c829f48859489d2195be5063cafc649d31387b257fe8eccb29a_prof);

        
        $__internal_f0b803ac5713389071aa0ef0e8fba49cb3db29033b0aaaa3f3073e54ba5d1650->leave($__internal_f0b803ac5713389071aa0ef0e8fba49cb3db29033b0aaaa3f3073e54ba5d1650_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd30d542bfb7f076ccba18f235d6f7928654b291ca7db17e33c823bbfcd90935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd30d542bfb7f076ccba18f235d6f7928654b291ca7db17e33c823bbfcd90935->enter($__internal_cd30d542bfb7f076ccba18f235d6f7928654b291ca7db17e33c823bbfcd90935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36003192122795ac5f192abac5fb93a2a372afe8378ff9b6af9410b77c5aebff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36003192122795ac5f192abac5fb93a2a372afe8378ff9b6af9410b77c5aebff->enter($__internal_36003192122795ac5f192abac5fb93a2a372afe8378ff9b6af9410b77c5aebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout proces verbal ";
        
        $__internal_36003192122795ac5f192abac5fb93a2a372afe8378ff9b6af9410b77c5aebff->leave($__internal_36003192122795ac5f192abac5fb93a2a372afe8378ff9b6af9410b77c5aebff_prof);

        
        $__internal_cd30d542bfb7f076ccba18f235d6f7928654b291ca7db17e33c823bbfcd90935->leave($__internal_cd30d542bfb7f076ccba18f235d6f7928654b291ca7db17e33c823bbfcd90935_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_595ff9ae44946bc21bbbc313f8a25db2d6d8e6c266991129e4b3cb00285f010a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595ff9ae44946bc21bbbc313f8a25db2d6d8e6c266991129e4b3cb00285f010a->enter($__internal_595ff9ae44946bc21bbbc313f8a25db2d6d8e6c266991129e4b3cb00285f010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b24d1b817b31ceef15ce7a66e4d7e25944564a692f59783e9921cabe5ee362c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b24d1b817b31ceef15ce7a66e4d7e25944564a692f59783e9921cabe5ee362c->enter($__internal_1b24d1b817b31ceef15ce7a66e4d7e25944564a692f59783e9921cabe5ee362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
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
        
        $__internal_1b24d1b817b31ceef15ce7a66e4d7e25944564a692f59783e9921cabe5ee362c->leave($__internal_1b24d1b817b31ceef15ce7a66e4d7e25944564a692f59783e9921cabe5ee362c_prof);

        
        $__internal_595ff9ae44946bc21bbbc313f8a25db2d6d8e6c266991129e4b3cb00285f010a->leave($__internal_595ff9ae44946bc21bbbc313f8a25db2d6d8e6c266991129e4b3cb00285f010a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/add.html.twig";
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

{% block title %}{{ parent() }} Ajout proces verbal {% endblock %}

{% set menu_proces_verbal           = true %}
{% set menu_proces_verbal_create    = true %}

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
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.pvType) }}
                        {{ form_row(form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProcesVerbal/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\add.html.twig");
    }
}
