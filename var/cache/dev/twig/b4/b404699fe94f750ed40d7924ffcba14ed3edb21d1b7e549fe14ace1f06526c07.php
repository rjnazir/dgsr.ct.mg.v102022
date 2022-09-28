<?php

/* AdminBundle:CtGenreCategorie:add.html.twig */
class __TwigTemplate_9ca34866be4a0595c6d9b633147d91618ff6134ab7e32d51dce62cffc190343a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreCategorie:add.html.twig", 1);
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
        $__internal_97a8790ba1412e9714812e332a15dad001af2c68aba5530366047615475a0229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a8790ba1412e9714812e332a15dad001af2c68aba5530366047615475a0229->enter($__internal_97a8790ba1412e9714812e332a15dad001af2c68aba5530366047615475a0229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:add.html.twig"));

        $__internal_49fc26e51e83c75e385f58f4570f6d19c11f252bae626e6be8417168ffe029c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fc26e51e83c75e385f58f4570f6d19c11f252bae626e6be8417168ffe029c0->enter($__internal_49fc26e51e83c75e385f58f4570f6d19c11f252bae626e6be8417168ffe029c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 8
        $context["menu_genre_categorie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a8790ba1412e9714812e332a15dad001af2c68aba5530366047615475a0229->leave($__internal_97a8790ba1412e9714812e332a15dad001af2c68aba5530366047615475a0229_prof);

        
        $__internal_49fc26e51e83c75e385f58f4570f6d19c11f252bae626e6be8417168ffe029c0->leave($__internal_49fc26e51e83c75e385f58f4570f6d19c11f252bae626e6be8417168ffe029c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eb85d91ce67a0c80b531815a9049e96596b1bd7e18f8b4a73c907b1af4a45d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb85d91ce67a0c80b531815a9049e96596b1bd7e18f8b4a73c907b1af4a45d9->enter($__internal_3eb85d91ce67a0c80b531815a9049e96596b1bd7e18f8b4a73c907b1af4a45d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_081bda5f388c6cbe571c32e9af58c7cae9ccd2bfbc41290fde96a60040e2b769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081bda5f388c6cbe571c32e9af58c7cae9ccd2bfbc41290fde96a60040e2b769->enter($__internal_081bda5f388c6cbe571c32e9af58c7cae9ccd2bfbc41290fde96a60040e2b769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Genre Categorie ";
        
        $__internal_081bda5f388c6cbe571c32e9af58c7cae9ccd2bfbc41290fde96a60040e2b769->leave($__internal_081bda5f388c6cbe571c32e9af58c7cae9ccd2bfbc41290fde96a60040e2b769_prof);

        
        $__internal_3eb85d91ce67a0c80b531815a9049e96596b1bd7e18f8b4a73c907b1af4a45d9->leave($__internal_3eb85d91ce67a0c80b531815a9049e96596b1bd7e18f8b4a73c907b1af4a45d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_48056a986018c80a85f52b302b65c416cfc9ea23a50ffd7a8c4adfee89ffc724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48056a986018c80a85f52b302b65c416cfc9ea23a50ffd7a8c4adfee89ffc724->enter($__internal_48056a986018c80a85f52b302b65c416cfc9ea23a50ffd7a8c4adfee89ffc724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b105d509573f02940b840fb08b7a9fc9b964f814fc9053c2c0cc7173f6bbbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b105d509573f02940b840fb08b7a9fc9b964f814fc9053c2c0cc7173f6bbbf7->enter($__internal_2b105d509573f02940b840fb08b7a9fc9b964f814fc9053c2c0cc7173f6bbbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une Genre Categorie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gcLibelle", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gcIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre_categorie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
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
        
        $__internal_2b105d509573f02940b840fb08b7a9fc9b964f814fc9053c2c0cc7173f6bbbf7->leave($__internal_2b105d509573f02940b840fb08b7a9fc9b964f814fc9053c2c0cc7173f6bbbf7_prof);

        
        $__internal_48056a986018c80a85f52b302b65c416cfc9ea23a50ffd7a8c4adfee89ffc724->leave($__internal_48056a986018c80a85f52b302b65c416cfc9ea23a50ffd7a8c4adfee89ffc724_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreCategorie:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Genre Categorie {% endblock %}

{% set menu_genre_categorie           = true %}
{% set menu_genre_categorie_create = true %}

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
                        <h3 class=\"box-title\">Créer une Genre Categorie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.gcLibelle) }}
                        {{ form_row(form.gcIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre_categorie\"/>
                        <a href=\"{{ path('genre_categorie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenreCategorie:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreCategorie/add.html.twig");
    }
}
