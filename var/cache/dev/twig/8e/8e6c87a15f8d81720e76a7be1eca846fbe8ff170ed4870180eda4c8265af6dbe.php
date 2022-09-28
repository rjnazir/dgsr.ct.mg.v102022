<?php

/* @Admin/CtGenreCategorie/edit.html.twig */
class __TwigTemplate_8f914ef47291da3a1eb227900c93789887de6cedc69fe0400f3cc38d3c507ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreCategorie/edit.html.twig", 1);
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
        $__internal_ab5c9a9ccb4bad6aedc543d5d1c21df6568ba5ce9fc4c97bb4885094697dc4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5c9a9ccb4bad6aedc543d5d1c21df6568ba5ce9fc4c97bb4885094697dc4d7->enter($__internal_ab5c9a9ccb4bad6aedc543d5d1c21df6568ba5ce9fc4c97bb4885094697dc4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/edit.html.twig"));

        $__internal_014306a61abfffff13fb7b79eb53eeea628336321c33ceeae76c840ef45a3a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014306a61abfffff13fb7b79eb53eeea628336321c33ceeae76c840ef45a3a56->enter($__internal_014306a61abfffff13fb7b79eb53eeea628336321c33ceeae76c840ef45a3a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5c9a9ccb4bad6aedc543d5d1c21df6568ba5ce9fc4c97bb4885094697dc4d7->leave($__internal_ab5c9a9ccb4bad6aedc543d5d1c21df6568ba5ce9fc4c97bb4885094697dc4d7_prof);

        
        $__internal_014306a61abfffff13fb7b79eb53eeea628336321c33ceeae76c840ef45a3a56->leave($__internal_014306a61abfffff13fb7b79eb53eeea628336321c33ceeae76c840ef45a3a56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b94687d31c3bdaed5ac2d8c6e15a9d4bafe7a287f2bd5e714594d3b5b55787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b94687d31c3bdaed5ac2d8c6e15a9d4bafe7a287f2bd5e714594d3b5b55787->enter($__internal_77b94687d31c3bdaed5ac2d8c6e15a9d4bafe7a287f2bd5e714594d3b5b55787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_413625ea8491bb0afe9ea7357676adae5c443ab7d950fbbb2eda96327c59a6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413625ea8491bb0afe9ea7357676adae5c443ab7d950fbbb2eda96327c59a6d0->enter($__internal_413625ea8491bb0afe9ea7357676adae5c443ab7d950fbbb2eda96327c59a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre Categorie ";
        
        $__internal_413625ea8491bb0afe9ea7357676adae5c443ab7d950fbbb2eda96327c59a6d0->leave($__internal_413625ea8491bb0afe9ea7357676adae5c443ab7d950fbbb2eda96327c59a6d0_prof);

        
        $__internal_77b94687d31c3bdaed5ac2d8c6e15a9d4bafe7a287f2bd5e714594d3b5b55787->leave($__internal_77b94687d31c3bdaed5ac2d8c6e15a9d4bafe7a287f2bd5e714594d3b5b55787_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_927ddd21cc0be1b62f1435b6fa2c0d8ed03fdbcf0b8ea2fee28f8673570fca90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927ddd21cc0be1b62f1435b6fa2c0d8ed03fdbcf0b8ea2fee28f8673570fca90->enter($__internal_927ddd21cc0be1b62f1435b6fa2c0d8ed03fdbcf0b8ea2fee28f8673570fca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ca44c3d40e25e5b939853915385e079184bcc073c3852d6ae11004a9ae27e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca44c3d40e25e5b939853915385e079184bcc073c3852d6ae11004a9ae27e66->enter($__internal_2ca44c3d40e25e5b939853915385e079184bcc073c3852d6ae11004a9ae27e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une Genre Categorie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gcLibelle", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gcIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre_categorie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
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
        
        $__internal_2ca44c3d40e25e5b939853915385e079184bcc073c3852d6ae11004a9ae27e66->leave($__internal_2ca44c3d40e25e5b939853915385e079184bcc073c3852d6ae11004a9ae27e66_prof);

        
        $__internal_927ddd21cc0be1b62f1435b6fa2c0d8ed03fdbcf0b8ea2fee28f8673570fca90->leave($__internal_927ddd21cc0be1b62f1435b6fa2c0d8ed03fdbcf0b8ea2fee28f8673570fca90_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreCategorie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Genre Categorie {% endblock %}

{% set menu_genre_categorie = true %}

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
                        <h3 class=\"box-title\">Editer une Genre Categorie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.gcLibelle) }}
                        {{ form_row(edit_form.gcIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre_categorie\"/>
                        <a href=\"{{ path('genre_categorie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreCategorie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreCategorie\\edit.html.twig");
    }
}
