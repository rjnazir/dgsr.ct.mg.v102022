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
        $__internal_84e1f9fcda70a3fa126122081dd5956ca053032749e0f95d8937ae422b2a030b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e1f9fcda70a3fa126122081dd5956ca053032749e0f95d8937ae422b2a030b->enter($__internal_84e1f9fcda70a3fa126122081dd5956ca053032749e0f95d8937ae422b2a030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:add.html.twig"));

        $__internal_384f14719365ad707bf3253cf4314c3508ef4335be833b02bac093b7cba6ce8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384f14719365ad707bf3253cf4314c3508ef4335be833b02bac093b7cba6ce8d->enter($__internal_384f14719365ad707bf3253cf4314c3508ef4335be833b02bac093b7cba6ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 8
        $context["menu_genre_categorie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e1f9fcda70a3fa126122081dd5956ca053032749e0f95d8937ae422b2a030b->leave($__internal_84e1f9fcda70a3fa126122081dd5956ca053032749e0f95d8937ae422b2a030b_prof);

        
        $__internal_384f14719365ad707bf3253cf4314c3508ef4335be833b02bac093b7cba6ce8d->leave($__internal_384f14719365ad707bf3253cf4314c3508ef4335be833b02bac093b7cba6ce8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7036f79aeaa03e36c5fbf60d6c95968ef44c56e4fa9aa5f74272808256b35620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7036f79aeaa03e36c5fbf60d6c95968ef44c56e4fa9aa5f74272808256b35620->enter($__internal_7036f79aeaa03e36c5fbf60d6c95968ef44c56e4fa9aa5f74272808256b35620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a4267f128356ea02a13abaf0cde3480452e40ec3e084607da2810563e4f040c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4267f128356ea02a13abaf0cde3480452e40ec3e084607da2810563e4f040c->enter($__internal_1a4267f128356ea02a13abaf0cde3480452e40ec3e084607da2810563e4f040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Genre Categorie ";
        
        $__internal_1a4267f128356ea02a13abaf0cde3480452e40ec3e084607da2810563e4f040c->leave($__internal_1a4267f128356ea02a13abaf0cde3480452e40ec3e084607da2810563e4f040c_prof);

        
        $__internal_7036f79aeaa03e36c5fbf60d6c95968ef44c56e4fa9aa5f74272808256b35620->leave($__internal_7036f79aeaa03e36c5fbf60d6c95968ef44c56e4fa9aa5f74272808256b35620_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae6ade0e5731c7e1e35c10f9c2c096f61c14edca5ba0a8a97e4ac1d11e5e859b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6ade0e5731c7e1e35c10f9c2c096f61c14edca5ba0a8a97e4ac1d11e5e859b->enter($__internal_ae6ade0e5731c7e1e35c10f9c2c096f61c14edca5ba0a8a97e4ac1d11e5e859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3e4972acd3eeafb93abb6cf47bcedbf966a7b7bcf1b22c57ee008eaf1d5870b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e4972acd3eeafb93abb6cf47bcedbf966a7b7bcf1b22c57ee008eaf1d5870b->enter($__internal_d3e4972acd3eeafb93abb6cf47bcedbf966a7b7bcf1b22c57ee008eaf1d5870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3e4972acd3eeafb93abb6cf47bcedbf966a7b7bcf1b22c57ee008eaf1d5870b->leave($__internal_d3e4972acd3eeafb93abb6cf47bcedbf966a7b7bcf1b22c57ee008eaf1d5870b_prof);

        
        $__internal_ae6ade0e5731c7e1e35c10f9c2c096f61c14edca5ba0a8a97e4ac1d11e5e859b->leave($__internal_ae6ade0e5731c7e1e35c10f9c2c096f61c14edca5ba0a8a97e4ac1d11e5e859b_prof);

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
