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
        $__internal_bde09fee59c42a2023de4f4e7b0140eda16de25db3e3e98bec5e3bc5a22c489a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde09fee59c42a2023de4f4e7b0140eda16de25db3e3e98bec5e3bc5a22c489a->enter($__internal_bde09fee59c42a2023de4f4e7b0140eda16de25db3e3e98bec5e3bc5a22c489a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/add.html.twig"));

        $__internal_14093d6e540d48787084ef6e57bb187cfbe30da780a6178414c2f8b81da06f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14093d6e540d48787084ef6e57bb187cfbe30da780a6178414c2f8b81da06f5d->enter($__internal_14093d6e540d48787084ef6e57bb187cfbe30da780a6178414c2f8b81da06f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 8
        $context["menu_genre_categorie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde09fee59c42a2023de4f4e7b0140eda16de25db3e3e98bec5e3bc5a22c489a->leave($__internal_bde09fee59c42a2023de4f4e7b0140eda16de25db3e3e98bec5e3bc5a22c489a_prof);

        
        $__internal_14093d6e540d48787084ef6e57bb187cfbe30da780a6178414c2f8b81da06f5d->leave($__internal_14093d6e540d48787084ef6e57bb187cfbe30da780a6178414c2f8b81da06f5d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d94d05e91025e93445ab9430b93d1889ca3e73e1d62fb2f033c0d9c59fa0073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d94d05e91025e93445ab9430b93d1889ca3e73e1d62fb2f033c0d9c59fa0073->enter($__internal_5d94d05e91025e93445ab9430b93d1889ca3e73e1d62fb2f033c0d9c59fa0073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7fd4b6be93f91cac75a465d909affd8a6ee6fb76c0a36aaf489225d86d68985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fd4b6be93f91cac75a465d909affd8a6ee6fb76c0a36aaf489225d86d68985->enter($__internal_e7fd4b6be93f91cac75a465d909affd8a6ee6fb76c0a36aaf489225d86d68985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Genre Categorie ";
        
        $__internal_e7fd4b6be93f91cac75a465d909affd8a6ee6fb76c0a36aaf489225d86d68985->leave($__internal_e7fd4b6be93f91cac75a465d909affd8a6ee6fb76c0a36aaf489225d86d68985_prof);

        
        $__internal_5d94d05e91025e93445ab9430b93d1889ca3e73e1d62fb2f033c0d9c59fa0073->leave($__internal_5d94d05e91025e93445ab9430b93d1889ca3e73e1d62fb2f033c0d9c59fa0073_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2974716625c04384fe16924e6aa6b5e3308b49469e290076b87c9fea7926b285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2974716625c04384fe16924e6aa6b5e3308b49469e290076b87c9fea7926b285->enter($__internal_2974716625c04384fe16924e6aa6b5e3308b49469e290076b87c9fea7926b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e853cb99ffcd76d405844f16fd2d2d2c8fdfd5b6c2c9312c2b697e9613224c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e853cb99ffcd76d405844f16fd2d2d2c8fdfd5b6c2c9312c2b697e9613224c29->enter($__internal_e853cb99ffcd76d405844f16fd2d2d2c8fdfd5b6c2c9312c2b697e9613224c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e853cb99ffcd76d405844f16fd2d2d2c8fdfd5b6c2c9312c2b697e9613224c29->leave($__internal_e853cb99ffcd76d405844f16fd2d2d2c8fdfd5b6c2c9312c2b697e9613224c29_prof);

        
        $__internal_2974716625c04384fe16924e6aa6b5e3308b49469e290076b87c9fea7926b285->leave($__internal_2974716625c04384fe16924e6aa6b5e3308b49469e290076b87c9fea7926b285_prof);

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
