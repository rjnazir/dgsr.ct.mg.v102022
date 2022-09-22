<?php

/* @Admin/CtCarosserie/add.html.twig */
class __TwigTemplate_11c944766529b8f72d23425cad811fb8eb6797e0c77e438abfb00c3f4d1d7e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCarosserie/add.html.twig", 1);
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
        $__internal_673cd92b75406ce4bbb2b8c583018bde20178102e8786e465da7c090d4cc4665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673cd92b75406ce4bbb2b8c583018bde20178102e8786e465da7c090d4cc4665->enter($__internal_673cd92b75406ce4bbb2b8c583018bde20178102e8786e465da7c090d4cc4665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/add.html.twig"));

        $__internal_8047fe495bd22ad7d9052674841df3cff80450add9bea857bf9221cddb37fbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8047fe495bd22ad7d9052674841df3cff80450add9bea857bf9221cddb37fbe1->enter($__internal_8047fe495bd22ad7d9052674841df3cff80450add9bea857bf9221cddb37fbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673cd92b75406ce4bbb2b8c583018bde20178102e8786e465da7c090d4cc4665->leave($__internal_673cd92b75406ce4bbb2b8c583018bde20178102e8786e465da7c090d4cc4665_prof);

        
        $__internal_8047fe495bd22ad7d9052674841df3cff80450add9bea857bf9221cddb37fbe1->leave($__internal_8047fe495bd22ad7d9052674841df3cff80450add9bea857bf9221cddb37fbe1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39b913d6edf28ebf0946580134e24a2a0b8be9178b300edbeb29b5c1efcd1c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b913d6edf28ebf0946580134e24a2a0b8be9178b300edbeb29b5c1efcd1c4f->enter($__internal_39b913d6edf28ebf0946580134e24a2a0b8be9178b300edbeb29b5c1efcd1c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b8b0c609d8a0eaa49214f42cfcf9f60797a71d2ea589756cfe74c5bf31c9df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8b0c609d8a0eaa49214f42cfcf9f60797a71d2ea589756cfe74c5bf31c9df2->enter($__internal_4b8b0c609d8a0eaa49214f42cfcf9f60797a71d2ea589756cfe74c5bf31c9df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Carroserie ";
        
        $__internal_4b8b0c609d8a0eaa49214f42cfcf9f60797a71d2ea589756cfe74c5bf31c9df2->leave($__internal_4b8b0c609d8a0eaa49214f42cfcf9f60797a71d2ea589756cfe74c5bf31c9df2_prof);

        
        $__internal_39b913d6edf28ebf0946580134e24a2a0b8be9178b300edbeb29b5c1efcd1c4f->leave($__internal_39b913d6edf28ebf0946580134e24a2a0b8be9178b300edbeb29b5c1efcd1c4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b908ca67125cd9c150de4aa9744027defb843739d1e45bbecf4932ebcc84b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b908ca67125cd9c150de4aa9744027defb843739d1e45bbecf4932ebcc84b22->enter($__internal_2b908ca67125cd9c150de4aa9744027defb843739d1e45bbecf4932ebcc84b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18610e16e279e42b3096e873bfdb6957a803388db264f61e3fd7586cda3f06b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18610e16e279e42b3096e873bfdb6957a803388db264f61e3fd7586cda3f06b3->enter($__internal_18610e16e279e42b3096e873bfdb6957a803388db264f61e3fd7586cda3f06b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une carrosserie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
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
        
        $__internal_18610e16e279e42b3096e873bfdb6957a803388db264f61e3fd7586cda3f06b3->leave($__internal_18610e16e279e42b3096e873bfdb6957a803388db264f61e3fd7586cda3f06b3_prof);

        
        $__internal_2b908ca67125cd9c150de4aa9744027defb843739d1e45bbecf4932ebcc84b22->leave($__internal_2b908ca67125cd9c150de4aa9744027defb843739d1e45bbecf4932ebcc84b22_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCarosserie/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Carroserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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
                        <h3 class=\"box-title\">Créer une carrosserie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtCarosserie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCarosserie\\add.html.twig");
    }
}
