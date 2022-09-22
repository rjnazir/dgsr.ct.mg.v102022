<?php

/* @Admin/CtGenreCategorie/add.html.twig */
class __TwigTemplate_d62a427a6727afcda2c7b4b89ee2e671bce915875298da20f45c0e0f9da44d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreCategorie/add.html.twig", 1);
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
        $__internal_e067a2c7ddaea1d96f30c85912b8ec9467f5d6b5b0c8cfdc80d175b0c7ece986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e067a2c7ddaea1d96f30c85912b8ec9467f5d6b5b0c8cfdc80d175b0c7ece986->enter($__internal_e067a2c7ddaea1d96f30c85912b8ec9467f5d6b5b0c8cfdc80d175b0c7ece986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/add.html.twig"));

        $__internal_44552313c6b1922ee47be0642e2f8b77d0f0b78fa42cdc9e729f95657f0397fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44552313c6b1922ee47be0642e2f8b77d0f0b78fa42cdc9e729f95657f0397fb->enter($__internal_44552313c6b1922ee47be0642e2f8b77d0f0b78fa42cdc9e729f95657f0397fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 8
        $context["menu_genre_categorie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e067a2c7ddaea1d96f30c85912b8ec9467f5d6b5b0c8cfdc80d175b0c7ece986->leave($__internal_e067a2c7ddaea1d96f30c85912b8ec9467f5d6b5b0c8cfdc80d175b0c7ece986_prof);

        
        $__internal_44552313c6b1922ee47be0642e2f8b77d0f0b78fa42cdc9e729f95657f0397fb->leave($__internal_44552313c6b1922ee47be0642e2f8b77d0f0b78fa42cdc9e729f95657f0397fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_218aff3e67cd5ed5c1a05bf7285af6e0951ba2f8a8fea279755e39fdf2e6ee53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218aff3e67cd5ed5c1a05bf7285af6e0951ba2f8a8fea279755e39fdf2e6ee53->enter($__internal_218aff3e67cd5ed5c1a05bf7285af6e0951ba2f8a8fea279755e39fdf2e6ee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ad81714c7156b2c10c4aeabe054a3b9794288bfe645d531f0d1b47ad3e0ba76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad81714c7156b2c10c4aeabe054a3b9794288bfe645d531f0d1b47ad3e0ba76->enter($__internal_1ad81714c7156b2c10c4aeabe054a3b9794288bfe645d531f0d1b47ad3e0ba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Genre Categorie ";
        
        $__internal_1ad81714c7156b2c10c4aeabe054a3b9794288bfe645d531f0d1b47ad3e0ba76->leave($__internal_1ad81714c7156b2c10c4aeabe054a3b9794288bfe645d531f0d1b47ad3e0ba76_prof);

        
        $__internal_218aff3e67cd5ed5c1a05bf7285af6e0951ba2f8a8fea279755e39fdf2e6ee53->leave($__internal_218aff3e67cd5ed5c1a05bf7285af6e0951ba2f8a8fea279755e39fdf2e6ee53_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b5a0fea5c4b63fff3c375d6daefafe412c19589786475b3eb5d1558ba243d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5a0fea5c4b63fff3c375d6daefafe412c19589786475b3eb5d1558ba243d85->enter($__internal_7b5a0fea5c4b63fff3c375d6daefafe412c19589786475b3eb5d1558ba243d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cfd7dbf0f59769f65a9724d99a0b8bc38adf52e0ea78f55d0a2774b2d7d40ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfd7dbf0f59769f65a9724d99a0b8bc38adf52e0ea78f55d0a2774b2d7d40ca->enter($__internal_0cfd7dbf0f59769f65a9724d99a0b8bc38adf52e0ea78f55d0a2774b2d7d40ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0cfd7dbf0f59769f65a9724d99a0b8bc38adf52e0ea78f55d0a2774b2d7d40ca->leave($__internal_0cfd7dbf0f59769f65a9724d99a0b8bc38adf52e0ea78f55d0a2774b2d7d40ca_prof);

        
        $__internal_7b5a0fea5c4b63fff3c375d6daefafe412c19589786475b3eb5d1558ba243d85->leave($__internal_7b5a0fea5c4b63fff3c375d6daefafe412c19589786475b3eb5d1558ba243d85_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreCategorie/add.html.twig";
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
{% endblock %}", "@Admin/CtGenreCategorie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreCategorie\\add.html.twig");
    }
}
