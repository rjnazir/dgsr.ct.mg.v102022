<?php

/* AdminBundle:CtTypeVisite:add.html.twig */
class __TwigTemplate_ff75e73335020577fdddfd0c1b75a0a4d6365dc2660c42f9a892a63b796ef959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:add.html.twig", 1);
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
        $__internal_d2a86a79e366178230c6f71efd36f0d91f4b8fb71b20bf81ecedf8fb4572a991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a86a79e366178230c6f71efd36f0d91f4b8fb71b20bf81ecedf8fb4572a991->enter($__internal_d2a86a79e366178230c6f71efd36f0d91f4b8fb71b20bf81ecedf8fb4572a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:add.html.twig"));

        $__internal_30976448d2e45eaa4c3c9e13b9a543de9ca5c7552ec54e7fa097dd2237a45a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30976448d2e45eaa4c3c9e13b9a543de9ca5c7552ec54e7fa097dd2237a45a01->enter($__internal_30976448d2e45eaa4c3c9e13b9a543de9ca5c7552ec54e7fa097dd2237a45a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a86a79e366178230c6f71efd36f0d91f4b8fb71b20bf81ecedf8fb4572a991->leave($__internal_d2a86a79e366178230c6f71efd36f0d91f4b8fb71b20bf81ecedf8fb4572a991_prof);

        
        $__internal_30976448d2e45eaa4c3c9e13b9a543de9ca5c7552ec54e7fa097dd2237a45a01->leave($__internal_30976448d2e45eaa4c3c9e13b9a543de9ca5c7552ec54e7fa097dd2237a45a01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9fc379e1fd74421f4cec16b24d4c1d357b3b1928cfa60d58cc9f23b088de2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fc379e1fd74421f4cec16b24d4c1d357b3b1928cfa60d58cc9f23b088de2a4->enter($__internal_a9fc379e1fd74421f4cec16b24d4c1d357b3b1928cfa60d58cc9f23b088de2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b248f8c1e988816273963df4deb6bc73b309ab1641cfa230b97fb2b3e60b69f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b248f8c1e988816273963df4deb6bc73b309ab1641cfa230b97fb2b3e60b69f1->enter($__internal_b248f8c1e988816273963df4deb6bc73b309ab1641cfa230b97fb2b3e60b69f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de visite ";
        
        $__internal_b248f8c1e988816273963df4deb6bc73b309ab1641cfa230b97fb2b3e60b69f1->leave($__internal_b248f8c1e988816273963df4deb6bc73b309ab1641cfa230b97fb2b3e60b69f1_prof);

        
        $__internal_a9fc379e1fd74421f4cec16b24d4c1d357b3b1928cfa60d58cc9f23b088de2a4->leave($__internal_a9fc379e1fd74421f4cec16b24d4c1d357b3b1928cfa60d58cc9f23b088de2a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d311e11ca38b2ab689bed7dd47487df216fcc970e8dc6b20bc8222f7772725c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d311e11ca38b2ab689bed7dd47487df216fcc970e8dc6b20bc8222f7772725c7->enter($__internal_d311e11ca38b2ab689bed7dd47487df216fcc970e8dc6b20bc8222f7772725c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf57656b8868dc10ff08ba76150612584d41e010c33241d523cdd27c0c9ed6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf57656b8868dc10ff08ba76150612584d41e010c33241d523cdd27c0c9ed6aa->enter($__internal_cf57656b8868dc10ff08ba76150612584d41e010c33241d523cdd27c0c9ed6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
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
        
        $__internal_cf57656b8868dc10ff08ba76150612584d41e010c33241d523cdd27c0c9ed6aa->leave($__internal_cf57656b8868dc10ff08ba76150612584d41e010c33241d523cdd27c0c9ed6aa_prof);

        
        $__internal_d311e11ca38b2ab689bed7dd47487df216fcc970e8dc6b20bc8222f7772725c7->leave($__internal_d311e11ca38b2ab689bed7dd47487df216fcc970e8dc6b20bc8222f7772725c7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeVisite:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/add.html.twig");
    }
}
